import io.appwrite.Client;
import io.appwrite.coroutines.CoroutineCallback;
import io.appwrite.services.Databases;
import io.appwrite.enums.RelationshipType;

Client client = new Client()
    .setEndpoint("https://cloud.appwrite.io/v1") // Your API Endpoint
    .setProject("5df5acd0d48c2") // Your project ID
    .setKey("919c2d18fb5d4...a2ae413da83346ad2"); // Your secret API key

Databases databases = new Databases(client);

databases.createRelationshipAttribute(
    "[DATABASE_ID]", // databaseId
    "[COLLECTION_ID]", // collectionId
    "[RELATED_COLLECTION_ID]", // relatedCollectionId
    RelationshipType.ONE_TO_ONE, // type
    false, // twoWay (optional)
    "", // key (optional)
    "", // twoWayKey (optional)
    RelationMutate.CASCADE, // onDelete (optional)
    new CoroutineCallback<>((result, error) -> {
        if (error != null) {
            error.printStackTrace();
            return;
        }

        System.out.println(result);
    })
);
