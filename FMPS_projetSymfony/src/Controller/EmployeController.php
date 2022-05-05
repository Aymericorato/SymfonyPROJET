<?php
    namespace App\Controller;

use App\Entity\ENTREPRISE;
use App\Entity\UTILISATEUR;
use App\Entity\PERSONNEL;
use App\Repository\UTILISATEURRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PERSONNELRepository;
use Doctrine\Bundle\DoctrineBundle\ManagerConfigurator;

class EmployeController extends AbstractController 
{
         /**
         * @Route("employe")
         */
        function createEmployeForm(Request $request){
            return $this->render("AjoutEmploye.html.twig");
        }

        /**
        * @Route("ajouteremploye", name="post_employe", methods={"POST"})
        */
        public function PostEmploye(ManagerRegistry $doctrine, Request $request) : Response {
            $data = $request->request->all();

            $employe = new PERSONNEL();
            $employe->setPERNOM($data['Nom']);
            $employe->setPERPRENOM($data['Prenom']);
            $employe->setPERGENRE($data['Genre']);
            $employe->setPERMAIL($data['Mail']);
            $employe->setPERTELEPHONE($data['Telephone']);
            $employe->setPERMETIER($data['Metier']);

            // Création d'un objet $entityManager qui va s'occuper de toutes nos entités
            //et permet les intéractions entre entités et base de données /
            $entityManager = $doctrine->getManager();
            /// Demande à l'entityManager de faire persister l'objet que l'on vient de créer, $utilisateurInfos
            //La méthode persist prépare l'opération 
            $entityManager->persist($employe);
            // Demande d'exécution de l'opération par la méthode flush */
            $entityManager->flush();

            return $this->render('index.html.twig');
        }


        

}


?>