import java.io.*;
import java.net.*;
import java.nio.charset.StandardCharsets;

public class TargetAcount {

  public Boolean autentify(String essaie) throws IOException {
    String urlParameters = "password=" + URLEncoder.encode(essaie, "UTF-8");

    //on cree une connexion entre la page de php et notre programme Java

    byte[] postData = urlParameters.getBytes(StandardCharsets.UTF_8);
    /*une fois la connexion etabli on envoi une requet http
     *par la methode POST on renvoi la chaine de caracter
     */
    int postDataLength = postData.length;
    String request = "http://localhost/pattern/traitement.php";
    URL url = new URL(request);
    HttpURLConnection conn = (HttpURLConnection) url.openConnection();
    conn.setDoOutput(true);
    conn.setInstanceFollowRedirects(false);
    conn.setRequestMethod("POST");
    conn.setRequestProperty(
      "Content-Type",
      "application/x-www-form-urlencoded"
    );
    conn.setRequestProperty("charset", "utf-8");
    conn.setRequestProperty("Content-Length", Integer.toString(postDataLength));
    conn.setUseCaches(false);
    try (DataOutputStream wr = new DataOutputStream(conn.getOutputStream())) {
      wr.write(postData);
    }

    /** on recueillie  la variable responsecode qui est la reponse de la page php
     * en fonction du resultat obtenu on saura le mot de passe
     */
    int responseCode = conn.getResponseCode();

    if (responseCode == 200) {
      return true;
    } else {
      return false;
    }
  }
}
