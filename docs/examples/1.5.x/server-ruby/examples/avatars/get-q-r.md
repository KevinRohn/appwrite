require 'appwrite'

include Appwrite

client = Client.new
    .set_endpoint('https://cloud.appwrite.io/v1') # Your API Endpoint
    .set_project('5df5acd0d48c2') # Your project ID
    .set_session('') # The user session to authenticate with

avatars = Avatars.new(client)

response = avatars.get_qr(
    text: '[TEXT]',
    size: 1, # optional
    margin: 0, # optional
    download: false # optional
)

puts response.inspect