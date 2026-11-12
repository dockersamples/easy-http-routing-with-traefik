# Stage 1: Build the Vite React app
FROM node:24-alpine AS base
WORKDIR /usr/local/app
COPY package.json yarn.lock ./

FROM base AS dev
RUN yarn install
COPY . .
CMD ["yarn", "dev"]

FROM base AS build
RUN yarn install --frozen-lockfile
COPY . .
RUN yarn build

# Stage 2: Serve the built app using Nginx
FROM nginx:alpine
COPY --from=build /usr/local/app/dist /usr/share/nginx/html
