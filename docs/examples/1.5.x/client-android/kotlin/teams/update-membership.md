import io.appwrite.Client
import io.appwrite.coroutines.CoroutineCallback
import io.appwrite.services.Teams

val client = Client(context)
    .setEndpoint("https://cloud.appwrite.io/v1") // Your API Endpoint
    .setProject("5df5acd0d48c2") // Your project ID

val teams = Teams(client)

val response = teams.updateMembership(
    teamId = "[TEAM_ID]", 
    membershipId = "[MEMBERSHIP_ID]", 
    roles = listOf(), 
)