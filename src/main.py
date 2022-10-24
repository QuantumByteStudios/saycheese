import os

HEADER = '\033[95m'
BLUE = '\033[94m'
CYAN = '\033[96m'
GREEN = '\033[92m'
WARNING = '\033[93m'
FAIL = '\033[91m'
RESET = '\033[0m'
BOLD = '\033[1m'


if os.name == 'nt':
    os.system('cls')
    print(f'{FAIL}This tool is not supported for Windows{RESET}')
    exit()
else:
    os.system('clear')


banner = f'''
 ___________
< {GREEN}SayCheese!{RESET} >
 -----------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\\
                ||----w |
                ||     ||
{GREEN}▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦▦{RESET}
'''

print(banner)
print(
    f"--------------------------------\n{GREEN}Starting Server On Localhost....{RESET}")
port = input(f"{BOLD}Enter Port Number: {RESET}")

if (port == "" or port == " "):
    port = 8080

print(f"{BLUE}Starting Server On{RESET} {CYAN}Localhost{RESET} Port: {port}")

os.system(f"php -q -S localhost:{port}")
