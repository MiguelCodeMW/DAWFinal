# Build Stage
FROM node:alpine AS build
RUN apk add --no-cache git
RUN git clone https://github.com/MiguelCodeMW/AlumnosReact.git
#RUN npm install -g vite
WORKDIR /AlumnosReact
#COPY vite-project/package*.json ./
RUN npm install

RUN cp .env.example .env

#COPY vite-project .
RUN npm run build

# Production Stage
FROM nginx:stable-alpine AS production
COPY --from=build /AlumnosReact/dist /usr/share/nginx/html
