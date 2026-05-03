# Strut — Refero Style

- Refero URL: https://styles.refero.design/style/deb6c017-d2d3-4945-aaee-fa3d9ea6de70
- Site URL: https://strut.so
- ID: deb6c017-d2d3-4945-aaee-fa3d9ea6de70
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:54:15.819Z
- Ranks: newest: 667, popular: 986, trending: 980

> Antique Paper Workspace

## Description

Strut's design system uses an antique paper aesthetic with modern, structured typography for a focused writing environment. A warm, desaturated canvas color sets a muted backdrop for crisp UI elements, defined by subtle borders rather than heavy shadows. The primary accent color is a soft, vivid yellow, used sparingly to highlight functional iconography and interactive elements. Component weights are ghost-like and delicate, prioritizing content over chrome.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Oatmeal Canvas | #e5dfd5 | neutral | Page backgrounds, card surfaces, and general UI canvas. Provides a warm, desaturated base |
| Muted Ash | #73706b | neutral | Decorative strokes, subtle borders, and placeholder text. A medium-dark gray for understated separation |
| Storm Gray | #676460 | neutral | Secondary text, link borders, and inactive icon fills. Slightly darker than Muted Ash for increased legibility |
| Charcoal Text | #333333 | neutral | Primary body text, headings, and strong borders. Provides high contrast against light backgrounds |
| Amber Accent | #ffb546 | brand | Yellow decorative accent for icons, marks, and small graphic details. Do not promote it to the primary CTA color |
| Solid Black | #000000 | neutral | Icon fills and specific graphic elements, used sparingly for strong contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Pressura Standard | Montserrat | 400, 500 | 12px, 14px, 48px, 68px, 104px, 136px | 0.92, 1.00, 1.33, 1.43, 1.67 | Display headings and section titles. The wide letter-spacing on larger sizes creates a distinctive, open aesthetic that is both modern and hints at classic print layouts. Tighter spacing on small text maintains legibility. |
| Inter | Inter | 400, 600 | 10px, 14px, 16px, 20px, 32px, 48px | 1.17, 1.25, 1.40, 1.43, 1.50, 1.60 | Body copy, links, functional UI text, and subheadings. A highly legible sans-serif for everyday content and interaction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.6 | 2.14 |
| body | 14 | 1.43 | 1 |
| body-lg | 16 | 1.5 |  |
| subheading | 20 | 1.4 |  |
| heading-sm | 32 | 1.25 |  |
| heading | 48 | 1.33 | -3.4 |
| heading-lg | 68 | 1 | -6.7 |
| display | 136 | 0.92 | -7.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "badges": "0px",
    "default": "8px",
    "elements": "24px",
    "containers": "28px"
  },
  "elementGap": "16px",
  "sectionGap": "96px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Interactive Card

**Role:** Standard content containers for features and workspace elements.

Background is Oatmeal Canvas (#e5dfd5). Features a subtle 1px solid border of Charcoal Text (#333333). Corner radius is 8px. Padding is 16px.

### Ghost Button/Link

**Role:** Used for secondary actions and text-based interactive elements.

Text color is Storm Gray (#676460) or Charcoal Text (#333333). When acting as a button, it has a 1px border using Charcoal Text (#333333) or Storm Gray (#676460) but no background fill. Radius is 0px.

### Icon Button

**Role:** Small, functional buttons identified by an icon.

Icons typically use Amber Accent (#ffb546) or Solid Black (#000000) for fill. No distinct background or border, relying on the icon itself for visual weight.

### Badge (Neutral Text)

**Role:** Indicative labels without a background.

Text color is Charcoal Text (#333333). No background color and no border. Padding is 0px with 0px border radius for tight integration.

## Do's

- Use Oatmeal Canvas (#e5dfd5) as the primary background for all major sections and containers.
- Apply GT Pressura Standard for all display-level typography, ensuring high letter-spacing on larger sizes for a distinctive open feel.
- Define UI element separation using Charcoal Text (#333333) or Muted Ash (#73706b) 1px solid borders, avoiding heavy shadows.
- Reserve Amber Accent (#ffb546) for critical interactive elements like active icons or subtle state indicators.
- Maintain a clear content hierarchy using Inter for body and functional text, with varying weights for emphasis at 10px-48px sizes.
- Apply 8px radius for general components and cards, and 28px for larger interactive containers, maintaining a soft, friendly feel.
- Utilize 16px for horizontal and vertical element gaps to ensure consistent breathing room and clear content separation.

## Don'ts

- Do not use dark or primary colored backgrounds for entire sections; the canvas should remain light and desaturated.
- Avoid bold or heavy font weights for headlines; use GT Pressura Standard 400/500 with generous letter-spacing to create visual impact.
- Do not over-saturate colored elements; the Amber Accent (#ffb546) is designed to be a pop against a muted palette, not compete with it.
- Avoid using multiple colors for text styles beyond Charcoal Text (#333333) and Storm Gray (#676460); maintain a monochromatic text palette.
- Do not introduce complex shadows or gradients; rely on subtle borders and high contrast for definition.
- Never compromise the wide letter-spacing for GT Pressura Standard headings; it is crucial to the brand's typographic identity.
- Do not apply padding below 16px for cards; this system prioritizes a comfortable, uncrowded density.

## Layout

The page uses a full-bleed layout for its hero section, featuring a centered headline over a background that extends edge-to-edge. Subsequent sections typically follow a max-width contained pattern, with content centered within a comfortable reading width. Section rhythm is marked by consistent vertical spacing of 96px, with no alternating background colors between sections. Content is arranged in alternating text-left/image-right (and vice versa) patterns, often with text descriptions beside product screenshots. Minor elements can appear in multi-column grids (e.g., 2 or 3 features). The overall density is comfortable, with generous breathing room between content blocks. Navigation is a minimal top bar with simple text links and a 'Strut' logo.

## Imagery

This design system uses product screenshots as its primary visual language. These screenshots are typically contained within UI frames, presented at a slight angle or as direct, clean depictions of the software interface. They serve an explanatory and product-showcase role, demonstrating features in context rather than purely decorative. There is an absence of lifestyle photography or complex illustrations; the focus is on the UI itself. Icons are minimal, mostly monochromatic outlines, using Solid Black (#000000) or Amber Accent (#ffb546) as fills, indicating functionality rather than adding decorative flair. Imagery density is moderate, carefully balanced with text blocks.

## Elevation

| Element | Style |
| --- | --- |
| Card/Modal | rgba(0, 0, 0, 0.5) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.5) 0px 1px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Clean, content-focused UI with a similar workspace aesthetic, relying on subtle borders and minimal chrome. |
| Linear | Emphasis on structured typography, high information density within a light theme, and subtle use of accent colors for functional elements. |
| Hey.com | Distinctive typographic choices for headings against a light, paper-like background, prioritizing content readability. |
| Basecamp | Desaturated, almost monochromatic color palette with a strong focus on content clarity and functional design over visual flourish. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #333333
background: #e5dfd5
border: #333333
accent: #ffb546
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero section: Oatmeal Canvas (#e5dfd5) background. Centered headline 'The complete writing workspace' in GT Pressura Standard weight 400, size 136px, Charcoal Text (#333333), letter-spacing -7.6px. Subheading 'Capture notes, organize projects' in Inter weight 400, size 20px, Charcoal Text (#333333), line-height 1.4.
2. Create an Interactive Card: Oatmeal Canvas (#e5dfd5) background, 8px radius. 1px solid Charcoal Text (#333333) border. Padding 16px. Headline 'My Project Ideas' in Inter weight 600, size 16px, Charcoal Text (#333333). Body text 'Outline your next big idea' in Inter weight 400, size 14px, Storm Gray (#676460).
3. Create a Ghost Link with Icon: Text 'Read More' in Storm Gray (#676460), Inter weight 400, size 14px. Prepend an icon filled with Amber Accent (#ffb546). No background or border. Margin 8px right of icon.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510433482-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510433482-thumb.jpg |
