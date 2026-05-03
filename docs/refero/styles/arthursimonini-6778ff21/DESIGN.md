# Arthursimonini — Refero Style

- Refero URL: https://styles.refero.design/style/6778ff21-44eb-40f3-ba85-2ee7de935f8f
- Site URL: https://arthursimonini.com
- ID: 6778ff21-44eb-40f3-ba85-2ee7de935f8f
- Theme: dark
- Industry: media
- Created: 2026-04-30T02:27:50.539Z
- Ranks: newest: 369, popular: 975, trending: 957

> Dramatic typographic stage

## Description

Arthur Simonini's website embodies a stark, high-contrast dark mode aesthetic, where elegant serif typography takes center stage on a pure black canvas. The design prioritizes visual drama and readability through extreme contrast and minimal UI elements. All interactive elements are presented in white, creating a luminous, ghost-like appearance that ensures focus on content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Canvas | #000000 | neutral | Page backgrounds, section separators, modal overlays — creates a deep, infinite backdrop |
| Ghost White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| LifeLTStd-Roman | serif | 400 | 18px | 1.00, 1.20 | Body text, navigation items, secondary headings — provides a classic, readable foundation. Its single weight keeps the tone consistent and understated. |
| RomieLigatures-Regular | serif | 400 | 18px, 65px, 167px | 0.73, 0.90, 1.20 | Large headings and callouts — its ornate ligatures and dramatic scale imbue sections with a distinct, artistic flair. The 'dlig' feature is crucial for its distinctive character. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 18 | 1.2 | 0 |
| subheading | 65 | 0.9 | 0 |
| display | 167 | 0.73 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "media": "0px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "15px",
  "sectionGap": "40px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Primary site navigation

Ghost White (#ffffff) text using LifeLTStd-Roman, 18px size, normal letter-spacing, on a Midnight Canvas (#000000) background. Underlines appear on hover/active states for subtle interaction feedback.

### Tracklist Item

**Role:** Displays music tracks with duration

Divided by a 1px solid Ghost White (#ffffff) border. Text in Ghost White (#ffffff) using LifeLTStd-Roman, 18px size, with additional decorative text in RomieLigatures-Regular. Each item has vertical padding of 5px.

### Media Grid Card

**Role:** Displays album or movie covers in a grid layout

Image-based card with no explicit background, padding, or border-radius (0px). The content is primarily visual, with text overlays in Ghost White (#ffffff) on some images. Cards are tightly packed without visible gaps between them, allowing the images to form a continuous visual block.

### Hero Headline

**Role:** Dominant page title

Large text in RomieLigatures-Regular, 167px, weight 400, Ghost White (#ffffff) on Midnight Canvas (#000000). Features font ligatures ('kern', 'dlig') for a unique visual signature.

## Do's

- Prioritize extreme contrast: Ghost White (#ffffff) text and elements must always appear on Midnight Canvas (#000000) backgrounds.
- Use RomieLigatures-Regular (weight 400, 'kern', 'dlig' features enabled) for all dominant headlines and titles to maintain the signature artistic feel.
- Apply LifeLTStd-Roman (weight 400) for body copy, navigation, and secondary text, ensuring consistent classic readability.
- Maintain strict adherence to 0px border-radius across all components, conveying a sharp, uncompromising aesthetic.
- Employ 1px solid Ghost White (#ffffff) borders as subtle dividers for lists and separating textual content.
- Utilize 15px as the primary elementGap and cardPadding, creating a comfortable yet contained density.
- Embrace the absence of drop shadows or elevation; surfaces are flat against the Midnight Canvas (#000000) background.

## Don'ts

- Do not introduce any saturated colors; the palette is strictly monochrome Ghost White (#ffffff) and Midnight Canvas (#000000).
- Avoid rounded corners or any soft shapes; all visual components should be sharp and rectilinear.
- Do not use any font weights other than 400 for both primary font families.
- Never introduce drop shadows or other forms of elevation; surfaces must remain flat against the background.
- Avoid excessive padding or large gaps between interactive elements; maintain a comfortable, not expansive, density.

## Layout

The page uses a full-bleed layout on Midnight Canvas, with content centered but extending edge-to-edge for media grids. The hero section features a large, centered headline in RomieLigatures-Regular. Sections are distinguished by consistent vertical spacing of 40px and sometimes by a 1px Ghost White divider. Content is arranged either as single-column text blocks or compact, tightly packed media grids. Navigation is a simple top bar with Ghost White links. The overall density is comfortable, with ample breathing room around text but dense information display in image grids.

## Imagery

The visual language is dominated by black-and-white photography and movie/album covers, often presented as tight crops or full-bleed. Imagery is presented with sharp, raw edges, typically contained within grid structures with no explicit spacing, creating a dense, mosaic-like appearance. Color imagery is desaturated to grayscale, maintaining the monochrome aesthetic. The role of imagery is primarily content showcase and decorative atmosphere, reflecting the artist's work.

## Similar Brands

| Business | Why |
| --- | --- |
| A24 (Studio) | Stark, monochrome dark mode with emphasis on unique typography and filmic visuals. |
| The New York Times (digital archive) | Heavy reliance on serif typography for classic, editorial feel on a dark background, minimal UI. |
| Figma (dark mode) | Dark UI with high-contrast text and functional rather than decorative use of white for interactive elements. |
| Pitchfork (Archival content) | Sparse, dark UI with a focus on imagery (album covers) and strong typographic voice. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a primary navigation link: text 'B.O.' in Ghost White (#ffffff), 18px LifeLTStd-Roman, weight 400. Background Midnight Canvas (#000000).
Create a tracklist item: text 'PANDA (HIBOU OST)' in Ghost White (#ffffff), 18px LifeLTStd-Roman, weight 400. Below it, text 'PLAY' in Ghost White (#ffffff), 18px RomieLigatures-Regular, weight 400. Separate with a 1px solid Ghost White (#ffffff) border. No border-radius.
Create a large hero headline: text 'ARTHUR SIMONINI' in Ghost White (#ffffff), 167px RomieLigatures-Regular, weight 400, with font-feature-settings 'kern' and 'dlig'. Background Midnight Canvas (#000000).
Create a media card for an image: no background, no padding, no border, and 0px border-radius. The image itself should fill the card area entirely, with text overlays in Ghost White (#ffffff).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516013575-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516013575-thumb.jpg |
