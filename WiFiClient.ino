#include <ESP8266WiFi.h>
#include <SFE_BMP180.h>
#include <Wire.h>
SFE_BMP180 pressure;


const char* ssid     = "Elite";
const char* password = "1234567890";

const char* host = "192.168.42.55";
//const char* streamId   = "....................";
//const char* privateKey = "....................";

void setup() {
  Serial.begin(115200);
  delay(10);
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());

//   delay(10);
//   if (pressure.begin())
//    Serial.println("BMP180 init success");
//  else
//  {
//    Serial.println("BMP180 init fail\n\n");
//    while(1); // Pause forever.
//  }
}


void loop() {
    delay(5000);
//  char status;
//  double T,P,p0,a;
//  Serial.println();
//    status = pressure.startTemperature();
//  if (status != 0)
//  {
//    delay(status);
//    status = pressure.getTemperature(T);
//    if (status != 0)
//    {
//      //Serial.print("temperature: ");
//      Serial.print(T,2);
//      //Serial.print(" deg C, ");
// 
//      status = pressure.startPressure(3);
//      if (status != 0)
//      {
//        // Wait for the measurement to complete:
//        delay(status);
//        status = pressure.getPressure(P,T);
//        if (status != 0)
//        {
//          // Print out the measurement:
//          Serial.println();
//         // Serial.print("absolute pressure: ");
//          Serial.print(P,2);
//          //Serial.print(" mb, ");
//          Serial.print(P*0.0295333727,2);
//          //Serial.println(" inHg");
//          //Serial.print(p0,2);
//          //Serial.print(" mb, ");
//          //Serial.print(p0*0.0295333727,2);
//          //Serial.println(" inHg");
//        }
//        else Serial.println("error retrieving pressure measurement\n");
//      }
//      else Serial.println("error starting pressure measurement\n");
//    }
//    else Serial.println("error retrieving temperature measurement\n");
//  }
//  else Serial.println("error starting temperature measurement\n");
//char temp = T;
//char pres = P*0.0295333727;
 int  moist = analogRead(A0);
 moist = map(moist,0,1023,0,100);

  Serial.print("connecting to ");
  Serial.println(host);
  
  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
 // Serial.println(client.connect(host, httpPort));
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }
  
  // We now create a URI for the request
  String url = "/boond/add_node.php";
  url += "?node_id=1";
  url += "&temp=10";
 // url += temp;
  url +="&pres=34";
  //url += pres; 
  url += "&&moist=";
  url += moist;
  
  
  Serial.print("Requesting URL: ");
  Serial.println(url);
  
  // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }
  
  // Read all the lines of the reply from server and print them to Serial
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }
  
  Serial.println();
  Serial.println("closing connection");
}

