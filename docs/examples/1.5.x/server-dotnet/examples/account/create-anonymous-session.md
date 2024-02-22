using Appwrite;
using Appwrite.Services;
using Appwrite.Models;

Client client = new Client()
    .SetEndPoint("https://cloud.appwrite.io/v1") // Your API Endpoint
    .SetProject("5df5acd0d48c2"); // Your project ID

Account account = new Account(client);

Session result = await account.CreateAnonymousSession();