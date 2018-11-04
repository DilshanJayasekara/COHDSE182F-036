def encrypt(string, shift):                 #Encryption
 
  cipher = ''
  for char in string: 
    if char == ' ':
      cipher = cipher + char
    elif  char.isupper():
      cipher = cipher + chr((ord(char) + shift - 65) % 26 + 65)
    else:
      cipher = cipher + chr((ord(char) + shift - 97) % 26 + 97)
  
  return cipher
 
text = input("Enter Text : ")
key = int(input("Enter key: "))
print("Original Text: ", text)
print("After encryption: ", encrypt(text, key))

print("\n -------------------------------------------------- \n")
def decrypt(string, shift):                   #Decryption
 
  cipher = ''
  for char in string: 
    if char == ' ':
      cipher = cipher + char
    elif  char.isupper():
      cipher = cipher + chr((ord(char) - shift - 65) % 26 + 65)
    else:
      cipher = cipher + chr((ord(char) - shift - 97) % 26 + 97)
  
  return cipher
 
text = input("Enter encrypted Text : ")
key = int(input("enter key : "))
print("Encrypted string: ", text)
print("After decryption: ", decrypt(text, key))


input("\n Press enter to exit")