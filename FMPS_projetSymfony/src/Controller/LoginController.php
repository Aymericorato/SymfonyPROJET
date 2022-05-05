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



class LoginController extends AbstractController 
    {
        /**
        * @Route("login")
        */
        function login()
        {
            return $this->render('login.html.twig');
        }

        /**
        * @Route("AjoutEntreprise",name="AjoutEntreprise")
        */
        function createEntrepriseForm(Request $request)
        {
            return $this->render('AjoutEntreprise.html.twig');  
        }

        /**
        * @Route("index.html.twig", name="indexadmin")
        */
        function indexadmin(ManagerRegistry $doctrine, Request $request)
        {
            $login = htmlspecialchars($_POST['login']);
            $mdp = hash('sha256',$_POST['mdp']);
            $entitymanager = $doctrine->getManager();
            $listeUtilisateur = $entitymanager->getRepository(UTILISATEUR::class)->findBy(array('UTIL_LOGIN' => $login),null ,1,0);

        if (isset($listeUtilisateur[0])) 
        {
            if ($login == $listeUtilisateur[0]->getUTILLOGIN() && $mdp == $listeUtilisateur[0]->getUTILMDP())
           {
               if ($listeUtilisateur[0]->getUTILROLE() == 'SA')
               {
                    return $this->render('Intermediaire.html.twig');
               }
               else 
               {
                    $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAll();
                    return $this->render('EntrepriseProf.html.twig', ['ENTREPRISE' => $Entreprises]);
               }
           }

            else
            {
                return $this->render('login.html.twig');
            }
        }
        else
        {
            return $this->render('login.html.twig');
        }
        }

        /**
        * @Route("intermediaire")
        */
        function intermediaire()
        {
            return $this->render('intermediaire.html.twig');
        }

     

        /**
         * @Route("Detail/{id}", name="Detail" , requirements={"parametre"="\[0-9]"})
         */
        function Detail(ManagerRegistry $doctrine, $id)
        {
            $entitymanager = $doctrine->getManager();
            $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->find($id);
            $personnel = $entitymanager->getRepository(PERSONNEL::class)->findPersonne($id);


        return $this->render("Detail.html.twig", ['ENTREPRISE' => $Entreprises, 'PERSONNEL' => $personnel]);
        
        }
        
         /**
         * @Route("Index", name="Index")
         */
        function Index(ManagerRegistry $doctrine)
        {
            $entitymanager = $doctrine->getManager();
            $Entreprises = $entitymanager->getRepository(ENTREPRISE :: class)->findAll();
            return $this->render('index.html.twig', ['ENTREPRISE' => $Entreprises]);
        }

       

    }
