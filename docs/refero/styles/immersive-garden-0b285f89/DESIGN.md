# Immersive Garden — Refero Style

- Refero URL: https://styles.refero.design/style/0b285f89-599f-4d6e-b7cd-3f39abac80c6
- Site URL: https://immersive-g.com
- ID: 0b285f89-599f-4d6e-b7cd-3f39abac80c6
- Theme: light
- Industry: agency
- Created: 2026-02-08T11:46:14.000Z
- Ranks: newest: 1218, popular: 500, trending: 593

> Bas-relief on white marble — a singular textured surface sculpted with light and shadow.

## Description

This design system evokes the delicate, architectural quality of a bas-relief sculpture, where details whisper rather than shout. The entire page functions as a single, subtly textured canvas of near-white, with form and depth communicated through the negative space and the gentle play of light and shadow, not distinct color blocks. Typography is precise and understated, acting as fine etchings on the surface, allowing the sculptural elements to dominate and define the brand's aesthetic of immersive, artistic digital experiences.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page background, primary surface. |
| Etched Graphite | #030303 | neutral | Primary text, interactive elements, subtle outlines. |
| Ink Black | #000000 | neutral | Secondary text, icons. Provides highest contrast on 'Canvas White'. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica Neue | system-ui, sans-serif | 400 | 12px, 14px | 1.10 | Captions, navigation links, secondary labels – providing utilitarian clarity against the subtle backdrop. |
| PSTimes | Times New Roman, serif | 400 | 28px | 1.20 | Primary headlines and core content – a whisper of classic serif that adds a refined, almost literary weight without being overly formal. |
| sans-serif | Arial, Helvetica, sans-serif | 400 | 16px | 1.20 | Standard body text and interactive elements. A pragmatic, legible choice for essential communication. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.1 |  |
| body-sm | 14 | 1.1 |  |
| body | 16 | 1.2 |  |
| heading | 28 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {},
  "elementGap": "5px",
  "sectionGap": "40px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Hero Headline Block



### Brand Identity & Navigation Bar



### Call to Action & Scroll Indicator Bar



### Primary Navigation Link

**Role:** Top-right navigation item

Text in 'Etched Graphite' (#030303), using Helvetica Neue at 12px, weight 400. Letter spacing normal. Understated, blending with the subtle aesthetic.

### Logo

**Role:** Brand identity

Text 'IMMERISVE GARDEN' in 'Etched Graphite' (#030303), Helvetica Neue at 12px, weight 400, coupled with an iconic graphic. The logo treatment aligns with the general text style to avoid visual dissonance.

### Call to Action Link

**Role:** Initiating user interaction

Text 'See all projects' in 'Etched Graphite' (#030303), sans-serif (system) at 16px, weight 400. Includes a subtle colon at the end, acting as a visual cue rather than a strong button treatment.

### Hero Headline

**Role:** Main page title

'Innovative digital experiences studio' rendered in PSTimes at 28px, weight 400, 'Etched Graphite' (#030303). It's the most prominent text, yet its size and serif style maintain the delicate, curated feel.

### Scroll Down Indicator

**Role:** User guidance

Text 'Scroll down' in 'Etched Graphite' (#030303), Helvetica Neue at 12px, weight 400. Positioned discreetly, it serves a functional purpose without breaking the minimal visual language.

## Do's

- Prioritize 'Canvas White' (#ffffff) as the primary background for all major sections and surfaces, maintaining the single-canvas aesthetic.
- Use PSTimes at 28px, weight 400 for primary headings to establish a refined tone.
- Employ Helvetica Neue at 12px or 14px, weight 400 for all navigation, labels, and secondary information to maintain a crisp, minimal hierarchy.
- Utilize 'Etched Graphite' (#030303) for all primary text and interactive elements.
- Maintain generous spacing with a general `elementGap` of 5px and `cardPadding` of 40px to enhance the sense of space and visual quietude.

## Don'ts

- Do not introduce highly saturated or brightly colored elements; the system relies on achromatic tones and subtle relief.
- Avoid strong box-shadows or distinct borders that would disrupt the singular, textured surface feel of the design.
- Refrain from using bold or heavy font weights; the typography is designed to be understated and delicate.
- Do not use highly contrasting backgrounds or text colors beyond 'Canvas White' (#ffffff) and 'Etched Graphite' (#030303) / 'Ink Black' (#000000).
- Avoid creating traditional button styles with solid fills or strong outlines. Interactive elements should be indicated primarily through text and subtle hover effects if any.

## Layout

The page maintains a full-bleed layout, using the entire viewport as a single, uniform textured canvas. There is no `pageMaxWidth`, creating an expansive, borderless experience. The hero section is characterized by a centered headline over the minimalist, sculptural background. Subsequent sections follow a consistent vertical rhythm, separated implicitly by the continuous background canvas and explicit content blocks that are spatially separated, rather than by alternating background colors. Content arrangement is typically centered or subtly offset, emphasizing negative space. There are hints of a fluid grid for content organization, allowing elements to breathe within the vast, singular background. Navigation is minimal, confined to a 'About' link in the top-right and a logo in the top-left, reinforcing the content-first, art-gallery feel.

## Imagery

The site employs a distinctive sculptural bas-relief style for its visuals, appearing embedded directly into the 'Canvas White' background. These are not photography or illustrations in the traditional sense, but rather rendered forms that create depth and shadow as if carved from the page itself. The treatment is full-bleed, seamlessly integrating with the background without any borders or masking, providing an immersive, tactile quality. Their role is primarily artistic and atmospheric, defining the brand's 'immersive' identity without relying on literal product showcases or lifestyle photography. The density is moderate, with these abstract forms occupying significant visual space to establish mood.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards Nominees | Often features websites that prioritize abstract visual experiences and subtle interactions over conventional UI elements. |
| Griflan | Similar use of expansive negative space and a focus on unique background textures or subtle motion for brand identity. |
| Future London Academy | Employs an elegant, content-focused approach with subtle typography and a clean, almost 'blank page' aesthetic for impact. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text (Primary):** #030303
- **Text (Secondary/Body):** #000000
- **Background:** #ffffff
- **Border:** #030303

### Example Component Prompts
1. **Create a hero section:** 'Canvas White' background. Headline 'Innovative digital experiences studio' using PSTimes at 28px, weight 400, '#030303'. Align headline centrally in the viewport. Ensure no pageMaxWidth constraint.
2. **Create a header navigation:** Top-right link 'About' using Helvetica Neue at 12px, weight 400, '#030303'. Top-left logo 'Immersive Garden' also using Helvetica Neue at 12px, weight 400, '#030303'. Use an `elementGap` of 5px for any internal horizontal spacing.
3. **Create a 'See all projects' link:** Text 'See all projects :' using sans-serif at 16px, weight 400, '#030303'. Position it unobtrusively at the bottom left section.
4. **Create a scroll indicator:** Text 'Scroll down' using Helvetica Neue at 12px, weight 400, '#030303'. Place it subtly, vertically centered on the right half of the screen.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925492455-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925492455-thumb.jpg |
