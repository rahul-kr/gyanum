�
    0  �V          8 	      -        �  +�  !        //                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       �  @  @    �   @@ �PRIMARY�token�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �                                                                                        InnoDB                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             H                                           6Stores details about batches (processes that run in…                                                                                                                                                             V ]   V          P   r  V )                                          bid  token  
timestamp  batch 

   @   - @@    @   � 
 G  @   -p  K  �  �?@ �bid�token�timestamp�batch� Primary Key: Unique batch ID.A string token generated against the current user's session id and the batch id, used to ensure that only the user who submitted the batch can effectively access it.A Unix timestamp indicating when this batch was submitted for processing. Stale batches are purged at cron time.A serialized array containing the processing data for the batch.