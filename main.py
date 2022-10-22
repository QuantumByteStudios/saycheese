import os

print("SayCheese!")

print("Starting Server On Localhost....")
port = input("Enter Port Number: ")

if (port == "" or port == " "):
    port = 8080

print(f"Starting Server On Localhost Port: {port}")

os.system("cd src/")
os.system(f"php -S localhost:{port}")
