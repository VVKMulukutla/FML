const fs = require('fs');

// Synchronously write data to a file
const content = 'Hello, World!';
fs.writeFileSync('example.txt', content);
console.log('File written successfully');

// Synchronously read data from a file
const data = fs.readFileSync('example.txt', 'utf8');
console.log('File content:', data);

// Synchronously delete a file
fs.unlinkSync('example.txt');
console.log('File deleted successfully');
