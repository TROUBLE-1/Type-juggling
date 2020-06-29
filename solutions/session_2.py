import hashlib, string, itertools, re, sys
import time

def gen_code( secret_key, usernameLength):
	start_time = time.time()
	count = 0
	for word in itertools.imap(''.join, itertools.product(string.lowercase, repeat=int(usernameLength))):
		hash = hashlib.md5(secret_key + "%s" % (word) ).hexdigest()[:32] 
				
		if re.match(r'0+[eE]\d+$', hash):		
			print "(+) Found a valid message!:  %s" % (word)
			print "(+) And your secret_key:  %s " % (secret_key)
			print "(+) Requests made: %d" % count
			print "(+) Equivalent loose comparision: %s == 0 " % (hash)
			print("--- %s seconds ---\n" % (time.time() - start_time))
		count += 1
		
def main():
	if len(sys.argv) != 3:
		print '(+) usage: %s <secret_key> <usernameLenght>' % sys.argv[0]
		print '(+) eg: %s Test123 8 ' % sys.argv[0]
		sys.exit(-1)
		
	
	secret_key = sys.argv[1]
	usernameLength = sys.argv[2]
	
	gen_code( secret_key, usernameLength)
	
if __name__ == "__main__":
	main()
