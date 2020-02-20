# Stack-teste

	# A Stack é composta de 4 containers

		# Containers de backend
			# backend_db
				- Container responsavel pela base de dados utilizando MariaDB 10
			# backend_php-fpm
				- Container responsavel por receber e interpretar código PHP
			# backend_webserver
				- Container baseado no web service NGINX, onde todo a interpretação de código PHP, 
				é enviada para container backend_php-fpm.
				- Este container possui o código PHP responsável em consultar a base de dados,
				e retornar as informações no formato JSON.
				- Para testar a exibição de dados no backend:
					http://localhost:8000/getData.php

		# Container de frontend
			# frontend_webserver
				- Este container é baseado em Node.JS, e possui o código implementado em Javascript
				e biblioteca AXIOS, responsável por consumir a API do backend_webserver (porta 8000).
				- Para testar a exibição do resultado no frontend:
					http://localhost:3000

	# Clone o repositório
		git clone https://github.com/waldemarjr/stack-teste

	# Provisione a Stack
		cd stack-teste
		mv env .env
		docker-compose up -d

	# Desprovisionando a stack
		cd stack-teste
                docker-compose down

	# Iniciando, parando e reiniciando a stack
		docker-compose start
		docker-compose stop
		docker-compose restart

	
