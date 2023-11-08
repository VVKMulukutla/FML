const { MongoClient, ServerApiVersion } = require('mongodb');
const fs = require('fs');
const uri = "mongodb+srv://vvkmulukutla:yLXSYndWxaO7nSDh@cluster0.r8tk7zl.mongodb.net/?retryWrites=true&w=majority";

const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });

async function run() {
    try {
        await client.connect();
        console.log("Connected to the MongoDB server");

        const database = client.db('edhoka_db');
        const collection = database.collection('edhoka_coll');

        // CREATE
        const insertResult = await collection.insertOne({ name: "John Doe", age: 30 });
        console.log('Inserted document:', insertResult);

        // READ
        const findResult = await collection.findOne({ name: "John Doe" });
        console.log('Found document:', findResult);

        // UPDATE
        const updateResult = await collection.updateOne(
            { name: "John Doe" },
            { $set: { age: 31 } }
        );
        console.log('Updated document:', updateResult);

        // DELETE
        const deleteResult = await collection.deleteOne({ name: "John Doe" });
        console.log('Deleted document:', deleteResult);

    } finally {
        await client.close();
    }
}

run().catch(console.dir);