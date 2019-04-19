require 'net/http'
require 'uri'
require 'json'

uri = URI.parse("http://localhost/call.php")

loop do
  print"Enter card ID: "
  card_id = gets
  res = Net::HTTP.post_form(uri, 'cardID' => [card_id], 'max' => '50')
  print res.body
end
