# Admin Login Time Restriction - Módulo Magento 2
🇧🇷 **Português** | 🇺🇸 **English**


Este módulo permite que você defina um intervalo de horário permitido para login de usuários admin no Magento 2.
Usuários que estiverem fora da lista de liberação recebem a mensagem:

Admin access is restricted at this time.

🇧🇷 **Funcionalidades**

- Bloqueio de login admin fora do horário permitido
- Configuração de horário diretamente no admin
- Lista de usuários que podem acessar independetemente do horário
- Suporte ao timezone do Magento
- Fácil instalação e manutenção

🇧🇷 **Utilização**

Copie o módulo para app/code/Moreira/AdminLoginTimeRestriction

Rode os seguintes comandos
```bash
bin/magento module:enable Moreira_AdminLoginTimeRestriction

bin/magento setup:upgrade

bin/magento setup:di:compile
```
Acesse o painel do Magento

Vá em:

Stores -> Configuration -> Advanced -> Admin Login Time Restriction

Preenche as configurações do módulo

Enable Module - Ativa ou desativa o módulo
Start Time - Hora de início do acesso permitido
End Time - Hora de término do acesso permitido
Users Allowed to Bypass Restriction - Lista de usuários admin que podem acessar independetemente do horário

🇺🇸 **Description**

This module allows you to define a time window during which admin users can log in to Magento 2
Users attempting to log in outside this window will see:

Admin access is restricted at this time.

🇺🇸 **Features**

- Restrict admin login outside configured hours
- Configurable time range directly from admin panel
- List specific users who can always log in
- Uses Magento's configured timezone
- Easy to install and maintain

🇺🇸 **Usage**

Copy the module to:
app/code/Moreira/AdminLoginTimeRestriction

Run the following commands
```bash
bin/magento module:enable Moreira_AdminLoginTimeRestriction

bin/magento setup:upgrade

bin/magento setup:di:compile
```
Access the Magento Admin Panel

Go to:

Stores -> Configuration -> Advanced -> Admin Login Time Restriction

Available fields


Enable Module - Enable or disable the module
Start Time - Start time for allowed login
End Time - End time for allowed login
Users Allowed to Bypass Restriction - List of admin users who can log in anytime
