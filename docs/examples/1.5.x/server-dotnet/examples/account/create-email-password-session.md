using Appwrite;
using Appwrite.Services;
using Appwrite.Models;
using Appwrite.Enums;
using Appwrite.Enums;

Client client = new Client()
    .SetEndPoint("https://cloud.appwrite.io/v1") // Your API Endpoint
    .SetProject("5df5acd0d48c2"); // Your project ID

Account account = new Account(client);

Session result = await account.CreateEmailPasswordSession(
    email: "email@example.com",
    password: "password"
);