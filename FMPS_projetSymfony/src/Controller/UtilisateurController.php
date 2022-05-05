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



class UtilisateurController extends AbstractController 
{
     /**
        * @Route("ListeUtilisateur", name="ListeUtilisateur")
        */
        function ListeUtilisateur(ManagerRegistry $doctrine)
        {
            $entitymanager = $doctrine->getManager();
            $Utilisateurs = $entitymanager->getRepository(UTILISATEUR :: class)->findby(array('UTIL_ROLE' => 'E'));
            return $this->render('ListeUtilisateur.html.twig', ['Utilisateurs' => $Utilisateurs]);
        }
 
        /**
        * @Route("Utilisateur",name="Utilisateur")
        */
        function createUtilisateurForm(Request $request)
        {
            return $this->render('AjoutUtilisateur.html.twig');
        }
 
        /**
        * @Route("ajouterutilisateur", name="post_utilisateur", methods={"POST"})
        */
        public function PostUtilisateur(ManagerRegistry $doctrine, Request $request) : Response {
            $data = $request->request->all();
 
            $mdp = hash('sha256',$data['MDP']);
 
            $utilisateur = new UTILISATEUR();
            $utilisateur->setUTILLOGIN($data['Login']);
            $utilisateur->setUTILMDP($mdp);
            $utilisateur->setUTILROLE($data['Role']);
 
            // Création d'un objet $entityManager qui va s'occuper de toutes nos entités
            //et permet les intéractions entre entités et base de données /
            $entityManager = $doctrine->getManager();
            /// Demande à l'entityManager de faire persister l'objet que l'on vient de créer, $utilisateurInfos
            //La méthode persist prépare l'opération 
            $entityManager->persist($utilisateur);
            // Demande d'exécution de l'opération par la méthode flush */
            $entityManager->flush();
            return $this->redirectToRoute('ListeUtilisateur');
        }

        /**
        * @Route("ModifUtil/{id}",name="ModifUtil" , requirements={"parametre"="\[0-9]"})
        */
        function ModifUtil(ManagerRegistry $doctrine, $id)
        {
            $entitymanager = $doctrine->getManager();
            $Utilisateurs = $entitymanager->getRepository(UTILISATEUR :: class)->find($id);
           
            return $this->render('ModifUtil.html.twig', ['UTILISATEUR' => $Utilisateurs]);
           
        }
        /**
        * @Route("updateutilisateur/{id}", name="update_utilisateur", methods={"POST"}, requirements={"parametre"="\[0-9]"})
        */
        public function UpdateUtilisateur(ManagerRegistry $doctrine, Request $request , $id) : Response {
            $data = $request->request->all();

            $mdp = hash('sha256',$data['MDP']);
            // Création d'un objet $entityManager qui va s'occuper de toutes nos entités
            //et permet les intéractions entre entités et base de données /
            $entityManager = $doctrine->getManager();
           
            $utilisateur = $entityManager->getRepository(UTILISATEUR :: class)->find($id);
            $utilisateur->setUTILLOGIN($data['Login']);
            $utilisateur->setUTILMDP($mdp);
            $utilisateur->setUTILROLE($data['Role']);
 
            /// Demande à l'entityManager de faire persister l'objet que l'on vient de créer, $utilisateurInfos
            //La méthode persist prépare l'opération 
            $entityManager->persist($utilisateur);
            // Demande d'exécution de l'opération par la méthode flush */
            $entityManager->flush();
 
            $entitymanager = $doctrine->getManager();
            $Utilisateurs = $entitymanager->getRepository(UTILISATEUR :: class)->findAll();
            return $this->render('Listeutilisateur.html.twig', ['Utilisateurs' => $Utilisateurs]);
        }
       
        /**
        * @Route("SupprimUtil/{id}", requirements={"parametre"="[0-9]"}, name="SupprimUtil")
         */
        function Supprimer($id)
        {
            $entityManager = $this->getDoctrine()->getManager();
            $Utilisateur = $this->getDoctrine()->getRepository(UTILISATEUR::class)->find($id);
            $entityManager->remove($Utilisateur);
            $entityManager->flush($Utilisateur);
            return $this->redirectToRoute("ListeUtilisateur");
        }

}


?>