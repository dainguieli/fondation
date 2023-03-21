<br>
<div class="comment-content">
    <h3>Commentaires</h3><br>

    <div class="commentaire-form">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
            @csrf 
            @method('post') 
            <div class="row">
                <div class="col-6">
                    <input type="text" name="pseudo" placeholder="pseudo" class="form form-control">
                      
               
                   
                </div>
                <div class="col-6"><input type="text" name="email" placeholder="email" class="form form-control"></div>
            </div> 
            <br>
            <textarea  name="message" class="form form-control"> </textarea><br>
            <button   type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
 
    
    </form>

   
</div>