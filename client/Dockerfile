# Use an official Node.js image
FROM node:18

# Set working directory
WORKDIR /usr/src/app

# Copy the package.json and package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application files
COPY . .

# Build the Nuxt.js application
RUN npm run build

# Expose port 3000
EXPOSE 3000
CMD ["npm", "run", "start"]
