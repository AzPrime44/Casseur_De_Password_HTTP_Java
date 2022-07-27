public class Fabrique {

  public static Hacker getInstance(String instance) {
    switch (instance) {
      case "dictio":
        {
          Hacker hacker = new Dictionnaire();
          return hacker;
        }
      case "force":
        {
          Hacker hacker = new BruteForce();
          return hacker;
        }
      default:
        return null;
    }
  }
}
