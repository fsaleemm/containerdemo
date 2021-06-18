# Container Demos 

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
