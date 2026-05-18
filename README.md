# Projeto de Extensão - Coleta de Lixo Eletrônico (UEPG)

O projeto de extensão **Lixo Eletrônico** é uma iniciativa acadêmica da Universidade Estadual de Ponta Grossa (UEPG) que busca mitigar os impactos ambientais causados pelo descarte incorreto de equipamentos tecnológicos. O sistema web atua como o ponto focal para a comunidade encontrar locais de descarte, acompanhar comunicados e visualizar os parceiros envolvidos.

## 🚀 Funcionalidades

- **Painel de Avisos Dinâmico:** Listagem automática de eventos futuros (com tags dinâmicas como "É HOJE!") e histórico de comunicados anteriores usando Carbon.
- **Pontos de Coleta (PEVs):** Mapeamento de locais para descarte com integração ao Google Maps, horários e tipos de materiais aceitos.
- **Carrossel de Parceiros:** Slider infinito em CSS exibindo as logos das entidades parceiras (cooperativas, empresas e órgãos públicos).
- **Área Administrativa Protegida:** Autenticação via Middleware (`auth`) para permitir que apenas coordenadores cadastrem avisos ou excluam registros direto da interface.

## 🛠️ Tecnologias Utilizadas

- **Framework:** Laravel (PHP)
- **Banco de Dados:** SQLite (Ambiente de desenvolvimento)
- **Frontend:** Blade Templates & Bootstrap 5
- **Ícones:** Bootstrap Icons
- **Manipulação de Datas:** Carbon

## ⚙️ Como Executar o Projeto Localmente

### Pré-requisitos
- PHP instalado
- Composer instalado
- Git

### Passo a Passo

1. **Clonar o repositório:**
   ```
   git clone <url-do-seu-repositorio-privado>
   cd site-extensao
   ```
   
2. **Instalar as dependências do projeto:**
   ```
   composer install
   ```
   
3. **Configurar as variáveis de ambiente:**
   Copie o arquivo de exemplo e gere a chave criptográfica do Laravel:
    ```
    cp .env.example .env
    php artisan key:generate
    ````

4. **Configurar e popular o  Banco de Dados:**
    Crie o arquivo do banco de dados SQLite (caso utilize SQLite) e execute as migrations junto com os seeders para injetar os dados de teste (Avisos, Parceiros,         Pontos de Coleta e o Usuário Admin):
   ```
   touch database/database.sqlite
    php artisan migrate --seed
   ```

5. **Iniciar o servidor de desenvolvimento:**
   ```
   php artisan serve
   ```
---
## 👥 Coordenação e Responsabilidade Técnica

- Coordenador Geral: Prof. Dr. Zito Palhano da Fonseca
- Instituição: Universidade Estadual de Ponta Grossa (UEPG) - Campus Uvaranas
- Contato: contato@lixoeletronico.uepg.br

