# Container Demos 

## AKS Demo
### Create AKS cluster and Azure Container Registry
1. [Create and connect to AKS Cluster](https://learn.microsoft.com/en-us/azure/aks/learn/quick-kubernetes-deploy-cli#create-aks-cluster).
1. [Create Azure Container Registry](https://learn.microsoft.com/en-us/azure/aks/tutorial-kubernetes-prepare-acr?tabs=azure-cli).

### Build Image and Push to Azure Container Registry

```bash
cd phpdemo/app

az acr build --registry <Registry Name> --image phpdemo:v1 .
```

### Atache ACR to AKS cluster

```bash
az aks update -n <Cluster Name> -g <Resource Group> --attach-acr <acr-name | acr-resource-id>
```

### Deploy Application

```bash
cd ..

# Create namespace 'demo'
kubectl create ns demo

kubectl apply -f yaml/lb.service.yml -f yaml/phpdemo.yml -n demo
```


## PHP Demo App (GitOps with Argo CD)

A simple php demo app that displays the hostname of the app server, the current date and time, and a version number.

### Setup Argocd

[Argocd](https://argoproj.github.io/argo-cd/) is a gitops continuous delivery tool for Kubernetes. 
Follow [instructions](https://argoproj.github.io/argo-cd/getting_started/) here to setup Argocd.
For step 3, use the Port Forwarding method:

```bash
kubectl port-forward svc/argocd-server -n argocd 8081:443
```

For step 6 use this git repo and the phpdemo folder to deploy the sample applications.

Once setup your Argocd setup you can view the deployment and sync them with manifest files in git.

Screenshots:

Application Setup View:
![Initial Setup](/images/s1.PNG)

Canary Deployment Network View:
![Deployment Network View ](/images/s2.PNG)

Canary Deployment Tree View:
![Deployment Tree View](/images/s3.PNG)
