<?php
namespace App\Controller;

use App\Entity\Jobs;
use App\Repository\JobsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class JobController extends ApiController
{
    /**
    * @Route("/jobs",methods="GET")
    */
    public function index(JobsRepository $jobsRepository)
    {
        $data = $jobsRepository->transformAll();
        return $this->respond($data);
    }

    /**
    * @Route("/company/{company}/{date}",methods="GET")
    */
   /* public function findCompany($company, $date, EntityManagerInterface $em, CompaniesRepository $companiesRepository)
    {
        $data = $companiesRepository->transformAll();
        $result = [];
        foreach($data as $item){
            $mystring = $item["company"];
            if(preg_match("/{$company}/i", $mystring)){
                array_push($result, $item);
            }
        }
        return $this->respond($result);
    }*/
}