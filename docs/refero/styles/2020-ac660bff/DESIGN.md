# 2020 — Refero Style

- Refero URL: https://styles.refero.design/style/ac660bff-3b21-4753-a80f-3692da6e735e
- Site URL: https://albumcolors.com
- ID: ac660bff-3b21-4753-a80f-3692da6e735e
- Theme: light
- Industry: media
- Created: 2026-04-30T03:21:29.129Z
- Ranks: newest: 173, popular: 995, trending: 1037

> Shifting monochrome poster

## Description

Album Colors functions as a dynamically colored digital poster, where the entire canvas shifts hue to celebrate album art. Its visual language relies on bold, all-caps typography set against a monochrome but interchangeable background. Interaction elements are ghosted, defined by stark borders rather than fills, reinforcing a sense of understated presence. The structure prioritizes a clear, grid-like presentation of content within a constantly re-colored frame.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #e4822e | brand | Dominant background color that dynamically shifts, setting the overall mood of the page |
| Slate Text | #4f503e | neutral | Primary text color for headings, body, and all interactive elements. Controls the visual weight against the dynamic canvas |
| White Contrast | #ffffff | neutral | Used for occasional backgrounds contrasting with the vibrant canvas |
| Black Accent | #000000 | neutral | Used for subtle backgrounds and in contrast to white backgrounds |
| Dark Overlay | #081618 | neutral | Used for occasional overlay backgrounds |
| Deep Red | #b13225 | brand | One of several dynamic occasional background colors for the canvas |
| Deep Orange | #c97f40 | brand | One of several dynamic occasional background colors for the canvas |
| Pale Green | #99aa91 | brand | One of several dynamic occasional background colors for the canvas, and for occasional links |
| Pale Pink | #feccc0 | brand | One of several dynamic occasional background colors for the canvas, and for occasional links |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica LT Pro | Helvetica Neue | 400 | 16px, 21px, 75px, 137px | 0.79, 0.80, 0.90, 1.00, 1.60 | Primary typeface for all headings and body text, providing a geometric, condensed feel. The tight letter-spacing contributes to its poster-like appearance, especially at larger sizes. |
| Helvetica | Helvetica Neue | 400 | 21px | 1.20 | Used for ghost buttons, maintaining readability even without explicit letter-spacing. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.6 | -0.8 |
| subheading | 21 | 1.2 | -1.05 |
| heading | 75 | 0.8 | -3.75 |
| display | 137 | 0.79 | -6.85 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element for navigation or actions

Text is Slate Text (#4f503e), 21px Helvetica weight 400. Has a 0px border-radius, with 0px padding. Defined by a 1px solid Slate Text (#4f503e) border.

### Content Wrapper

**Role:** Container for album art and related text

No specific background color; inherits the dynamic Canvas background. Contains varying individual album details.

### Main Heading

**Role:** Primary page title

Slate Text (#4f503e), 137px Helvetica LT Pro weight 400, line-height 0.79, letter-spacing -0.05em.

### Subheading

**Role:** Secondary page title or description

Slate Text (#4f503e), 75px Helvetica LT Pro weight 400, line-height 0.80, letter-spacing -0.05em.

### Body Text

**Role:** Descriptive text

Slate Text (#4f503e), 16px Helvetica LT Pro weight 400, line-height 1.6, letter-spacing -0.05em.

## Do's

- Use Slate Text (#4f503e) for all text and ghost button borders against the dynamic canvas.
- Apply 0px border-radius consistently for all interactive elements and containers.
- Utilize Helvetica LT Pro (or Helvetica Neue) with a letter-spacing of -0.05em for headlines and body text to maintain the condensed, poster-like aesthetic.
- Implement the dynamic page background using any of the brand-colored hexes (#e4822, #b13225, #c97f40, #99aa91, #feccc0) as the primary Canvas.
- Maintain a comfortable density with 20px of padding consistently around content blocks.
- Employ the ghost button style (text color + border color, no fill) for all primary interactive elements.
- Prioritize stark visual contrast between text and background, typically Slate Text (#4f503e) on a vivid brand color or White Contrast (#ffffff) on Dark Overlay (#081618).

## Don'ts

- Avoid using filled buttons; all actions should be ghosted with borders.
- Do not introduce rounded corners; maintain sharp, rectilinear shapes for all elements.
- Do not deviate from the defined Helvetica font families or their specified letter-spacing.
- Refrain from using shadow effects for elevation; elevation is achieved through color contrast and direct placement.
- Do not use generic system fonts unless specified for a component; prioritize Helvetica LT Pro for brand consistency.
- Avoid adding extraneous decorations or complex gradients on surfaces.
- Do not use subtle variations of neutrals if a clear contrast is available; keep the palette stark.

## Layout

The page primarily uses a full-bleed layout, where the dynamically colored Canvas extends edge-to-edge. Content appears to be centered within this broad frame. The hero section features a large, stacked headline and subheading against the colored background. Below this, album covers are presented in a grid-like fashion, often accompanied by artist and title in a secondary typeface. Vertical spacing between sections is consistent, employing a simple stacked arrangement. There is no visible complex grid, sidebars, or mega-menus; navigation is minimal, characterized by ghosted textual links.

## Imagery

The site's primary imagery consists of prominent album cover art, dynamically displayed within a clean editorial context. These are treated as contained, rectangular elements without rounded corners or complex masking. There are no lifestyle photos or abstract illustrations; the visual focus remains on the album art itself, presented directly to showcase its colors and design. Icons, if present, are minimal and functional, depicted with sharp, clean lines and inheriting the main text color. The density is image-heavy, with large album covers dominating sections, balanced by concise, impactful typography.

## Similar Brands

| Business | Why |
| --- | --- |
| Spotify Wrapped | Uses large, impactful typography against a dynamically colored, full-bleed background to present data in a personalized, poster-like format. |
| Are.na | Features a strong focus on content display within a minimalist UI, often employing ghosted interactive elements and a distinct typographic voice. |
| AIGA Eye on Design | Employs bold headlines, a constrained color palette, and a clear, editorial grid-based layout for visual content. |
| Google Arts & Culture | Presents large-scale visual content (artworks, photographs) in a clean, often full-bleed layout with minimal UI overlay and strong type. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #4f503e
background: #e4822e
border: #4f503e
accent: #e4822e
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero section: Canvas background #e4822e. Headline 'ALBUM COLORS' in Slate Text (#4f503e), 137px Helvetica LT Pro weight 400, line-height 0.79, letter-spacing -6.85px. Subheading 'OF THE YEAR' in Slate Text (#4f503e), 75px Helvetica LT Pro weight 400, line-height 0.80, letter-spacing -3.75px. Body text 'A COLLECTION OF 150 ALBUM COVERS...' in Slate Text (#4f503e), 16px Helvetica LT Pro weight 400, line-height 1.6, letter-spacing -0.8px.
2. Create a Ghost Button: Has text 'REFRESH TO CHANGE COLOR' in Slate Text (#4f503e), 21px Helvetica weight 400, normal letter-spacing, with a 1px solid Slate Text (#4f503e) border and 0px border-radius.
3. Create an Album Art Container: Place a 0px border-radius image of an album cover, scale to fill available space, against the active Canvas background color. Text 'Margo Price' and 'THAT'S HOW RUMORS GET STARTED' appearing as annotations, in Slate Text (#4f503e), using 16px Helvetica LT Pro weight 400, letter-spacing -0.8px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519269429-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519269429-thumb.jpg |
