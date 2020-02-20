FROM node:10.10.0-alpine

RUN mkdir -p /home/node/app/node_modules && chown -R node:node /home/node/app && pwd

WORKDIR /home/node/app

RUN pwd && ls -l

COPY ./app/*.json ./

RUN npm install -g express && npm install axios && npm install

COPY . .

COPY --chown=node:node . .

USER node

CMD [ "node", "app.js" ]
