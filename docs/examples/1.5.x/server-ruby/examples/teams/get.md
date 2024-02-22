require 'appwrite'

include Appwrite

client = Client.new
    .set_endpoint('https://cloud.appwrite.io/v1') # Your API Endpoint
    .set_project('5df5acd0d48c2') # Your project ID
    .set_session('') # The user session to authenticate with

teams = Teams.new(client)

response = teams.get(
    team_id: '[TEAM_ID]'
)

puts response.inspect