<?php
    namespace App\Controller; 
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Entity\ENTREPRISE;
    use App\Form\EntrepriseForm;
    use Doctrine\Persistence\ManagerRegistry;

    class AjoutEntreprise extends AbstractController{

    /**
    * @Route("index.html.twig", name="indexadmin")
    */
    function indexadmin(ManagerRegistry $doctrine, Request $request)
    {
        $entitymanager = $doctrine->getManager();
        $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAll();
        return $this->render('index.html.twig', ['ENTREPRISE' => $Entreprises]);
    }

    /**
     * @Route("ajouterentreprise", name="post_entreprise", methods={"POST"})
     */
    public function PostEntreprises(ManagerRegistry $doctrine, Request $request) : Response {
        $data = $request->request->all();

        $entreprise = new ENTREPRISE();
        $entreprise->setENTRAISONSOCIALE($data['RaisonSociale']);
        $entreprise->setENTADRESSE1($data['Adresse']);
        $entreprise->setENTVILLE($data['Ville']);
        $entreprise->setENTCODEPOSTAL($data['CP']);
        $entreprise->setENTPAYS($data['Pays']);

        /* Création d'un objet $entityManager qui va s'occuper de toutes nos entités
        et permet les intéractions entre entités et base de données */
        $entityManager = $doctrine->getManager();
        /* Demande à l'entityManager de faire persister l'objet que l'on vient de créer, $utilisateurInfos
        La méthode persist prépare l'opération */
        $entityManager->persist($entreprise);
        /* Demande d'exécution de l'opération par la méthode flush */
        $entityManager->flush();

        $entitymanager = $doctrine->getManager();
        $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAll();
        return $this->render('index.html.twig' , ['ENTREPRISE' => $Entreprises]);
    }

        /**
        * @Route("Supprimer/{id}", requirements={"parametre"="[0-9]"}, name="Supprimer")
         */
        function Supprimer($id)
        {
            $entityManager = $this->getDoctrine()->getManager();
            $Entreprises = $this->getDoctrine()->getRepository(ENTREPRISE::class)->find($id);
            $entityManager->remove($Entreprises);
            $entityManager->flush($Entreprises);
            return $this->redirectToRoute("Index");
        }

        /**
        * @Route("ModifEnt/{id}",name="ModifEnt" , requirements={"parametre"="[0-9]"})
        */
        function ModifEnt(ManagerRegistry $doctrine, $id)
        {
            $entitymanager = $doctrine->getManager();
            $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->find($id);

            return $this->render('ModifEntreprise.html.twig', ['ENTREPRISE' => $Entreprises]);

        }

        /**
        * @Route("Modifent/{id}",name="post_modif", methods={"POST"}, requirements={"parametre"="[0-9]"})
        */
        public function UpdateEntreprise(ManagerRegistry $doctrine, Request $request , $id) : Response {
            $data = $request->request->all();

            // Création d'un objet $entityManager qui va s'occuper de toutes nos entités
            //et permet les intéractions entre entités et base de données /
            $entityManager = $doctrine->getManager();

            $entreprise = $entityManager->getRepository(ENTREPRISE :: class)->find($id);
            $entreprise->setENTRAISONSOCIALE($data['RaisonSociale']);
            $entreprise->setENTADRESSE1($data['Adresse']);
            $entreprise->setENTADRESSE2($data['Adresse2']);
            $entreprise->setENTADRESSE3($data['Adresse3']);
            $entreprise->setENTVILLE($data['Ville']);
            $entreprise->setENTCODEPOSTAL($data['CP']);
            $entreprise->setENTPAYS($data['Pays']);
 
            /// Demande à l'entityManager de faire persister l'objet que l'on vient de créer, $utilisateurInfos
            //La méthode persist prépare l'opération 
            $entityManager->persist($entreprise);
            // Demande d'exécution de l'opération par la méthode flush */
            $entityManager->flush();
 
            $entitymanager = $doctrine->getManager();
            $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAll();
            return $this->render('Index.html.twig', ['ENTREPRISE' => $Entreprises]);
        }

<<<<<<< Updated upstream:FMPS_projetSymfony/src/Controller/AjoutEntreprise.php
}
=======
        /**
        * @Route("Recherche", name="Recherche")
        */
        function Recherche(ManagerRegistry $doctrine)
        {
            $motRechercher = $_POST["Cherche"];
            $choixRecherche = $_POST["ChoixRecherche"];
            $entitymanager = $doctrine->getManager();
            if( $choixRecherche == "Nom")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findRaisonSociale($motRechercher);
             }
             elseif($choixRecherche == "CodePostal")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findCodePostal($motRechercher);
             }
             elseif($choixRecherche == "Adresse1")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAdresse1($motRechercher);
             }
             elseif($choixRecherche == "Adresse2")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAdresse2($motRechercher);
             }
             elseif($choixRecherche == "Adresse3")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAdresse3($motRechercher);
             }
             elseif($choixRecherche == "Ville")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findVille($motRechercher);
             }
             elseif($choixRecherche == "Pays")
             {
                $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findPays($motRechercher);
             }
            return $this->render('listeRecherche.html.twig', ['ENTREPRISE' => $Entreprises]);
        }


        /**
        * @Route("AjoutOption/{id}",name="AjoutOption" , requirements={"parametre"="[0-9]"})
        */
        function AjoutOption(ManagerRegistry $doctrine, $id)
        {
            $entitymanager = $doctrine->getManager();
            $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->find($id);
            $options = $entitymanager->getRepository(OPTION :: class)->findAll();

            return $this->render('AjoutOption.html.twig', ['ENTREPRISE' => $Entreprises, 'OPTIONS' => $options]);
        }
                
        /**
        * @Route("ajouterOption/{id}", name="post_AjoutOption", methods={"POST"}, requirements={"parametre"="[0-9]"})
        */
        public function PostOption(ManagerRegistry $doctrine, Request $request, $id) : Response {
            $entityManager = $doctrine->getManager();
            $Entreprises = $entityManager->getRepository(ENTREPRISE :: class)->find($id);
            $options = $entityManager->getRepository(OPTION :: class)->findAll();

            $idOptions = $request->get("Options");            
            $selectOptions = array();          


            foreach ($options as $optAll) {                
                foreach ($idOptions as $optS) {                    
                    if ($optAll->getId() == $optS) {                        
                        $selectOptions[] = $optAll;                    
                    }               
                }            
            }

            foreach ($selectOptions as $opt) {
                $Entreprises->addOPTID($opt);
            }

            $entityManager->persist($Entreprises);
            $entityManager->flush();

            return $this->redirect("/Detail?id=" . $id);

        }




    }
    
?>
>>>>>>> Stashed changes:FMPS_projetSymfony/src/Controller/EntrepriseController.php
