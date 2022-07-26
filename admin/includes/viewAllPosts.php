<table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Strona</th>
                <th>Status</th>
                <th>Obrazki</th>
                <th>Tagi</th>
                <th>Komentarze</th>
                <th>Data</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $query = "SELECT * FROM posts";
                $selectPosts = mysqli_query($connection, $query);
            
                while($row = mysqli_fetch_assoc($selectPosts)) {
                  $post_id = $row['post_id'];
                  $post_author = $row['post_author'];
                  $post_title = $row['post_title'];
                  $post_category_id = $row['post_category_id'];
                  $post_status = $row['post_status'];
                  $post_image = $row['post_image'];
                  $post_tags = $row['post_tags'];
                  $post_comment_count = $row['post_comment_count'];
                  $post_date = $row['post_date'];

                  echo "<tr>";
                  echo "<td>{$post_id}</td>";
                  echo "<td>{$post_author}</td>";
                  echo "<td>{$post_title}</td>";
                  echo "<td>{$post_category_id}</td>";
                  echo "<td>{$post_status}</td>";
                  echo "<td><img width='100' src='../images/{$post_image} alt='image'></td>";
                  echo "<td>{$post_tags}</td>";
                  echo "<td>{$post_comment_count}</td>";
                  echo "<td>{ $post_date}</td>";
                  echo "</tr>";
                }
              ?>

                <td>10</td>
                <td>Au</td>
                <td>Testowy</td>
                <td>Casdasegory</td>
                <td>Sts</td>
                <td>Image</td>
                <td>Tags</td>
                <td>asda</td>
                <td>sdasd</td>

            </tbody>
          </table>