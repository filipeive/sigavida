# Documentação do Sistema Misto de Venda, Gestão de Stock e Consultório Médico

## Introdução
O sistema "Amor à Vida" é uma solução integrada para farmácias e consultórios médicos, com funcionalidades de venda, gestão de estoque, controle financeiro e gerenciamento de consultas. Este documento descreve as funcionalidades e os requisitos técnicos para o sistema, que será desenvolvido utilizando **Laravel** como framework PHP e **MySQL** para banco de dados.

---

## Funcionalidades Principais

### 1. Sistema de Venda
#### a) Registro de Clientes
- **Clientes Singulares**:
  - Cadastro básico de dados pessoais.
  - Registro automático do valor da compra no livro de caixa (entradas).
  - Registro de saídas em caso de retirada de valores.
- **Empresas**:
  - Emissão de faturas após compras ou consultas, vinculando-as como "contas a pagar" no livro de caixa.
  - Geração de recibos após pagamento.

#### b) Registro de Vendas Diárias
- Cadastro detalhado das vendas realizadas durante o dia.
- Possibilidade de gerar relatórios:
  - Relatórios de vendas diárias, semanais, mensais e anuais.
  - Análise por categoria de produtos e serviços.

#### c) Emissão de Recibos e Faturas
- Impressão automática de recibos e faturas em cada transação.
- Integração com o módulo financeiro para controle das entradas e saídas.

---

### 2. Gestão de Stock
- Cadastro de produtos com:
  - Nome, descrição, quantidade em estoque, preço e validade.
- Controle de produtos consumidos internamente (consultório):
  - Registro de produtos retirados para enfermagem, laboratório, ecografia, sala de radiografia ou outros serviços.
- Alerta de produtos com estoque baixo ou próximos da validade.
- Relatórios de entrada e saída de produtos.

---

### 3. Consultório Médico
#### a) Gerenciamento de Consultas
- Cadastro de pacientes com:
  - Dados pessoais, histórico médico e consultas realizadas.
- Agendamento de consultas por área:
  - Enfermagem, laboratório, ecografia, sala de radiografia, etc.
- Registro de produtos consumidos em cada consulta.

#### b) Relatórios de Serviços
- Relatórios detalhados por tipo de serviço (enfermagem, exames, etc.).
- Controle de despesas com produtos consumíveis em cada setor.

---

### 4. Controle de Caixa
- Registro automático de entradas:
  - Valores de vendas e pagamentos de faturas.
- Registro manual de saídas:
  - Pagamentos de despesas e retiradas de valores.
- Geração de relatórios financeiros:
  - Saldo diário, semanal, mensal e anual.
  - Detalhes de entradas e saídas.

---

### 5. Sistema de Login
- Autenticação em duas etapas (OTP + senha).
- Logins modulares por área:
  - Farmácia.
  - Consultório.
- Controle de acessos baseado em permissões.

---

## Requisitos Técnicos

### 1. Frontend
- Interface intuitiva para operações de venda, estoque e consultas.
- Design responsivo para uso em desktops, tablets e smartphones.

### 2. Backend
- Desenvolvido utilizando o framework **Laravel**.
- Banco de dados **MySQL** para gerenciar:
  - Clientes, produtos, consultas e transações financeiras.
- Utilização de **Eloquent ORM** para manipulação de dados.
- Integração com módulos de relatórios e emissão de documentos (faturas e recibos).
- Uso de **filas e jobs** para processamento assíncrono, quando necessário.

### 3. Segurança
- Criptografia de dados sensíveis (ex.: senhas, OTP).
- Controle de sessões e auditoria de acessos.
- Proteção contra injeção SQL e outras vulnerabilidades comuns.
- Implementação de middleware de autenticação e autorização.

---

## Benefícios do Sistema
- Integração total entre farmácia e consultório.
- Controle automatizado de vendas, estoque e serviços.
- Redução de erros manuais com registro automático no livro de caixa.
- Geração de relatórios completos para tomada de decisão.
- Melhor atendimento ao cliente com emissão rápida de recibos e faturas.

---

## Conclusão
O sistema "Amor à Vida" será desenvolvido com **Laravel**, proporcionando uma solução robusta e moderna para farmácias e consultórios médicos. Com recursos de controle operacional e financeiro, ele garante eficiência, segurança e qualidade nos serviços prestados.

