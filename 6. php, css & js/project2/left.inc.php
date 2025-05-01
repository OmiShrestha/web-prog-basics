<aside class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                       
                       <?php foreach ($continents as $continent): ?>
                        <li class="list-group-item"><a href="#"><?= htmlspecialchars($continent) ?></a></li>
                       <?php endforeach; ?>
                        
                    </ul>
                </div>
                <!-- end continents panel -->

                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                      
                       <?php foreach ($countries as $code => $country): ?>
                        <li class="list-group-item">
                            <a href="list.php?country=<?= urlencode($country) ?>"><?= htmlspecialchars($country) ?></a>
                        </li>
                       <?php endforeach; ?>
                        
                    </ul>
                </div>
                <!-- end continents panel -->
            </aside>