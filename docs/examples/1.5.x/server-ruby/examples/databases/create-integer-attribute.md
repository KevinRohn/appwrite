require 'appwrite'

include Appwrite

client = Client.new
    .set_endpoint('https://cloud.appwrite.io/v1') # Your API Endpoint
    .set_project('5df5acd0d48c2') # Your project ID
    .set_key('919c2d18fb5d4...a2ae413da83346ad2') # Your secret API key

databases = Databases.new(client)

response = databases.create_integer_attribute(
    database_id: '[DATABASE_ID]',
    collection_id: '[COLLECTION_ID]',
    key: '',
    required: false,
    min: null, # optional
    max: null, # optional
    default: null, # optional
    array: false # optional
)

puts response.inspect