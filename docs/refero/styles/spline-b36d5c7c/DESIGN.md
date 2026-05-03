# Spline — Refero Style

- Refero URL: https://styles.refero.design/style/b36d5c7c-9b28-4c99-b5a8-69ce03621410
- Site URL: https://spline.design
- ID: b36d5c7c-9b28-4c99-b5a8-69ce03621410
- Theme: dark
- Industry: design
- Created: 2026-03-28T15:49:53.000Z
- Ranks: newest: 986, popular: 269, trending: 886

> Glowing Forms in the Void

## Description

The design feels like a creative void, a deep space canvas where ideas materialize as glowing forms. An absolute black (#000000) background serves as this void, making every piece of content feel like it's emitting light. Hierarchy is achieved not through shadows or solid grays, but through layered translucency — panels and buttons are semi-transparent white overlays, creating a glassmorphism effect. The custom Spline Sans typeface is used universally at normal weights, giving headings a confident but understated presence. A single, energetic Spline Blue (#0062ff) is reserved for primary actions, acting as a focused beacon in the minimalist dark environment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Void Black | #000000 | neutral | Global page background, the foundational canvas for all content |
| Panel Sheen | #ffffff | neutral | Card and panel surfaces (CSS var: --color-panel-bg) |
| Button Sheen | #ffffff | neutral | Secondary button backgrounds (CSS var: --color-btn-bg) |
| Bright White | #ffffff | neutral | Headlines, primary text, active icons, logos |
| Cloud | #cccccc | neutral | Secondary body text |
| Silver | #999999 | neutral | Tertiary text, metadata, placeholder text |
| Text Dim | #ffffff | neutral | Inactive navigation link text |
| Nav Background | #191a1d | neutral | Opaque background for navigation bar on scroll |
| Spline Blue | #0062ff | brand | Primary CTA buttons — the single, high-energy action color |
| Neon Pink | #ff5cab | accent | Hero graphic accents and illustrative elements |
| Golden Orb | #ffb01f | accent | Hero graphic accents and illustrative elements |
| Violet Haze | #a770ff | accent | Hero graphic accents and illustrative elements |
| Emerald Glow | #47b35f | accent | Hero graphic accents and illustrative elements |
| Code Orange | #ce9178 | accent | Syntax highlighting in code blocks |
| Code Green | #6a9955 | accent | Syntax highlighting in code blocks |
| Code Blue | #569cd6 | accent | Syntax highlighting in code blocks |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Spline Sans | Inter | 400, 500 | 12px, 13px, 14px, 16px, 18px, 20px, 24px, 36px, 40px, 58px | 1.15, 1.22, 1.24, 1.25, 1.33, 1.35, 1.38, 1.43, 1.50, 1.56, 1.71 | The universal brand typeface for all UI text, from display headlines to body copy. Its use at normal weights (400/500) gives the design an approachable, technical feel, avoiding the aggression of heavy, bold headlines. |
| Spline Sans Mono | IBM Plex Mono | 400 | 14px | 1.50 | Used exclusively for code snippets and technical text, providing clear differentiation from UI copy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 |  |
| body | 16 | 1.5 |  |
| subheading | 20 | 1.35 |  |
| heading-sm | 24 | 1.33 |  |
| heading | 40 | 1.25 |  |
| display | 58 | 1.22 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "pills": "99px",
    "buttons": "12px",
    "smallPanels": "16px"
  },
  "elementGap": "",
  "sectionGap": "96px",
  "cardPadding": "40px",
  "pageMaxWidth": "1280px"
}
```

## Components

### CTA Button Group



### Community Showcase Cards



### Announcement Banner + Feature Card



### Primary CTA Button

**Role:** The main user call-to-action.

Solid Spline Blue (#0062ff) background with Bright White (#ffffff) text. Uses a 12px radius and generous padding (16px 24px). Font is Spline Sans 16px weight 500.

### Secondary Button

**Role:** Secondary actions, like 'Log in' or alternate CTAs.

Translucent Button Sheen (rgba(255, 255, 255, 0.15)) background with Bright White (#ffffff) text. Uses a 12px radius and 10px 20px padding.

### Navigation Link

**Role:** Links within the main header navigation.

Ghost button style with a transparent background. Text is Text Dim (rgba(255, 255, 255, 0.7)) and becomes Bright White (#ffffff) on hover/active. No border or radius.

### Feature Card

**Role:** Large cards used to detail product features or benefits.

Large container with a Panel Sheen (rgba(255, 255, 255, 0.08)) background, a 24px border radius, and 40px internal padding. Contains heading and body text.

### Header Nav Bar

**Role:** Persistent site navigation.

A full-width container, initially transparent over the hero and transitioning to a translucent Nav Background (#191a1d) on scroll. Contains the logo, navigation links, and primary/secondary buttons.

### Logo Marquee Item

**Role:** Displaying partner or customer logos.

A simple container with a single monochrome logo in Bright White (#ffffff). No background, border, or shadow.

## Do's

- Use Void Black (#000000) as the universal background. Never use solid grays.
- Achieve depth and hierarchy using translucent white overlays (e.g., rgba(255,255,255,0.08)), not shadows.
- Reserve the vibrant Spline Blue (#0062ff) exclusively for primary call-to-action buttons.
- Use a 24px radius for large panels/cards and a 12px radius for buttons.
- Set all UI text, including headlines, in Spline Sans at a 400 or 500 font weight.
- Maintain generous whitespace between sections (approx. 96px) to let content breathe.
- Pair any imagery or illustrative elements with the core accent palette (Neon Pink, Golden Orb, Violet Haze).

## Don'ts

- Don't use drop shadows or box shadows for elevation.
- Don't introduce new saturated colors for UI elements beyond the primary Spline Blue.
- Don't use bold (700+) font weights; rely on size and color for typographic hierarchy.
- Don't use fully opaque gray backgrounds for any component.
- Don't use inconsistent corner radii; stick to the 12px/24px/pill system.
- Don't outline buttons or inputs with solid borders; use translucent fills instead.
- Don't place text directly on complex background imagery without a text protection scrim or overlay.

## Layout

The layout leads with a full-bleed, immersive hero section with centered text over an animated visual background. Subsequent content is contained within a centered, max-width (approx. 1280px) column. The page structure is a simple vertical stack of sections separated by generous whitespace (96px+). Content is often arranged in multi-column grids, such as the 5-column community showcase and the multi-column logo marquee, to display information densely but cleanly.

## Imagery

The visual language is split between abstract and concrete. The hero features amorphous, glowing 3D shapes that are purely atmospheric, setting a futuristic and creative tone. Below this, the imagery switches to product-focused showcases: a grid of thumbnails displaying user-generated 3D scenes and designs. All imagery serves to demonstrate the tool's capabilities, either by evoking creative possibility (abstract) or showing tangible results (showcase). There is no lifestyle photography; the product and its output are the heroes.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Precision dark-mode UI with a custom sans-serif font and a single, vibrant accent color for key actions. |
| Vercel | Developer-focused dark theme, emphasis on typography, and a minimalist interface with high-contrast elements. |
| Framer | Creative tool for digital products with a polished dark theme, clean typography, and focus on interactive examples. |
| Runway | AI creative tool with a futuristic dark UI, glowing accents, and emphasis on showcasing generated media. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Background**: `Void Black` (#000000)
- **Text**: `Bright White` (#ffffff)
- **Secondary Text**: `Silver` (#999999)
- **Primary CTA**: `Spline Blue` (#0062ff)
- **Card Surface**: `Panel Sheen` (rgba(255, 255, 255, 0.08))

### Example Component Prompts
1.  **Hero Section**: "Create a full-screen hero section with a `Void Black` (#000000) background. Add a headline 'The all-in-one platform' in `Spline Sans` at 58px font size, `Bright White` (#ffffff) color, and 400 weight. Below it, add a primary CTA button with the text 'Get started — it’s free'. The button should have a `Spline Blue` (#0062ff) background, `Bright White` text, 12px border-radius, and 16px vertical, 24px horizontal padding."
2.  **Community Gallery Card**: "Create a card with a 16px border-radius and a transparent background. Inside, place an image that fills the width. Below the image, add a title 'Product Design' in `Spline Sans` 14px `Bright White` (#ffffff), and a sub-caption '@username' in `Spline Sans` 13px `Silver` (#999999) prefixed with a small user icon."
3.  **Feature Section**: "Create a content section with 96px top/bottom padding. Inside a 1280px max-width container, create a large feature card with a `Panel Sheen` (rgba(255, 255, 255, 0.08)) background, 24px border-radius, and 40px padding. The card should contain a headline 'Where ideas become production-ready' in `Spline Sans` 40px `Bright White` (#ffffff)."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929283439-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929283439-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b36d5c7c-9b28-4c99-b5a8-69ce03621410-1777560362383-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b36d5c7c-9b28-4c99-b5a8-69ce03621410-1777560362383-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b36d5c7c-9b28-4c99-b5a8-69ce03621410-1777560362383-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b36d5c7c-9b28-4c99-b5a8-69ce03621410-1777560362383-preview-detail-poster.jpg |
