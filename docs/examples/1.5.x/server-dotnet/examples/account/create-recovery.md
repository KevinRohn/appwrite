using Appwrite;
using Appwrite.Services;
using Appwrite.Models;
using Appwrite.Enums;
using Appwrite.Enums;

Client client = new Client()
    .SetEndPoint("https://cloud.appwrite.io/v1") // Your API Endpoint
    .SetProject("5df5acd0d48c2") // Your project ID
    .SetSession(""); // The user session to authenticate with

Account account = new Account(client);

Token result = await account.CreateRecovery(
    email: "email@example.com",
    url: "https://example.com"
);