import java.util.*;

public class HackClient {

  //une fonction timer pour calculer la duree .

  public static void timer(long duree) {
    long min, second, milisecond;
    milisecond = duree % 1000;
    duree /= 1000;
    min = duree / 60;
    second = duree % 60;
    System.out.println(
      "     " + min + "M  " + second + " s  " + milisecond + " ms"
    );
  }

  public static void main(String[] args) {
    TargetAcount account = new TargetAcount(); //le compte ciblé
    String choix;
    Scanner inputString = new Scanner(System.in);
    while (true) {
      System.out.print(
        "taper 'force' pour le programme BruteForce ou 'dictio' pour le programme Dictionnaire:\n >   "
      );
      choix = inputString.nextLine(); //!le choix du programme en fonction du quel l'instance sera crée dans la fabrique

      if (choix.equals("force") || choix.equals("dictio")) break;
      System.out.print("commande non prise en charge \n");
    }

    System.out.print("searching.....pleasewait...\n  ");
    Date dateDeDebut = new Date(); //temps avant l execution de matcher

    Fabrique.getInstance(choix).matcher(account);

    Date dateDeFin = new Date(); //temps apres l execution de matcher
    long duree = dateDeFin.getTime() - dateDeDebut.getTime(); //determine la durée.
    timer(duree);
    inputString.close();
  }
}
