<?php
class View extends Controller {
    public function show(){
        $projects = $this->getProjects();

        foreach($projects as $project){ ?>
            <tr>
                <td><?php echo $project['id']; ?></td>
                <td><?php echo $project['judul']; ?></td>
                <td><?php echo $project['tema']; ?></td>
                <td><?php echo $project['link desain']; ?></td>
                <td><?php echo $project['desainer']; ?></td>
                <td><?php echo $project['client']; ?></td>
            </tr>
<?php
        }
    }

    public function find(){
        $detailProjects = $this->getProjectsBy();

        if(empty($detailProjects)){
            return;
        }
        foreach($detailProjects as $detail){ ?>
            <div>
                <h3><?php echo $detail['judul']?></h3>
                <p>tema: <?php echo $detail['tema']?></p>
                <p>link desain: <?php echo $detail['link desain']?></p>
                <p>desainer: <?php echo $detail['desainer']?></p>
                <p>client: <?php echo $detail['client']?></p>
            </div>
            <?php
        }
    }
}
        ?>