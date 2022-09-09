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
    public function index(JobsRepository $companiesRepository)
    {
        $data = $companiesRepository->transformAll();
        return $this->respond($data);
    }

    /**
    * @Route("/job/{company}/{date}",methods="GET")
    */
    public function findCompany($company, $date, EntityManagerInterface $em, JobsRepository $companiesRepository)
    {
        $data = $companiesRepository->transformAll();
        $result = [];
        //$s = s
        foreach($data as $item){
            if($item['company_id'] == $company){
                array_push($result, $item);
            }
        }
        return $this->respond($result);
    }
}