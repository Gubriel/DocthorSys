#Requisitos: 
#   Rode o programa no git bash do seu computador;
#   Certifique-se de que o script esta rodando na pasta que o programa Docthor-Sys foi apagado.

#Definindo dados
echo "Digite o nome de usuario do GitHub >> "
read user;
echo "Digite o e-mail do GitHub >> "
read email;
echo "Cole o Token de autenticação recebido pelo meu mestre (Gustavo C Pinto) >> "
read token;

#Configurando usuario e senha no ambinte do git bash
git config --global user.name  "$user"
git config --global user.email "$email"

#Configurando credenciais
git remote set-url origin https://$user:$token@github.com/Gubriel/DocthorSys.git

#Testando credenciais
echo "script $user" > teste_$user.txt
git add teste_$user.txt
git commit -m "teste_$user"
git push
