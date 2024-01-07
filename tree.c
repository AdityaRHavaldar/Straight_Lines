#include<stdio.h>
#include<stdlib.h>
struct node {
    int info;
    struct node *left;
    struct node *right;
};

typedef struct node NODE;

NODE *getnode(NODE *root,int ele)
{
    
    NODE *p;
    p=(NODE *)malloc(sizeof(NODE));
    p->info=ele;
    p->left=NULL;
    p->right=NULL;
}

NODE *insert(NODE *root,int ele)
{
    NODE *ptr=root;
    if (root == NULL)
    {
        root = getnode(root,ele);
        return root;
    }
    if (ptr==NULL)
    {
        ptr = getnode(root,ele);
        return ptr;
    }
    if(ele < ptr->info)
    {
        ptr->left =insert(ptr->left,ele);
    }
    else{
        ptr->right = insert(ptr->right,ele);
    }

    return root;
}

NODE *inorder(NODE *root, int ele)
{
    NODE *ptr=root;
    if (ptr->info > ele)
    {
        p = inorder(ptr->left,ele);
    }
    else{
        p = inorder(ptr->right,ele);
    }
    while (ptr->info=NULL)
    {
        printf("%d",ptr->info)
    }
}


int main()
{
    NODE *root=NULL;
    int ch;
   
    while (1)
    {
        printf("enter your choice\n");
        scanf("%d",&ch);
        switch(ch)
        {
            case 1 : root = insert(root);
                        break;
            case 2 : root = delete(root);
                        break;
            case 3 : root = traverse(root);
                        break;
            case 4 : exit(0);
                        break;
            default : printf("wrong choice, try again\n")
        }
    }
}