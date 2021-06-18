# Container Demo

## PHP Demo App

A simple php demo app that displays the hostname of the app server, the current date and time, and a version number.

### Setup Argocd

Follow [instructions](https://argoproj.github.io/argo-cd/getting_started/) here to setup Argocd.
For step 3, use the Port Forwarding method:

```bash
kubectl port-forward svc/argocd-server -n argocd 8081:443
```

