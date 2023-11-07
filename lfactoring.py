non_terminal = 'S'
productions = 'iEtS|iEtSeS|a|iES'
def left_factoring(productions,non_terminal):
    words = [word for word in productions.split('|') if word != '']
    if len(words) > 1:
        counts = {}
        for word in words:
            prefix = ''
            for i in range(len(word)):
                prefix += word[i]
                counts[prefix] = counts.get(prefix, 0) + 1

        try:
            alpha = max((key for key, value in counts.items() if value > len(words) / 2), key=len)

            non_terminal_prime = ''
            gamma = []
            for word in words:
                if alpha in word:
                    non_terminal_prime += word.replace(alpha, '') + '|'
                else:
                    gamma.append(word)

            print(f"{non_terminal} --> {alpha}{non_terminal}'{'|' + '|'.join(gamma) if gamma else ''}")
            print(f"{non_terminal}' --> {non_terminal_prime[:-1]}#")

            
            non_terminal = non_terminal + "'"
            left_factoring(non_terminal_prime)
        except:
            print('...................')


print(f"The given grammar is: {non_terminal} --> {productions}")
print("After Left Factoring:")
left_factoring(productions,non_terminal=non_terminal)