# VSCO® — Refero Style

- Refero URL: https://styles.refero.design/style/759c0588-ea22-44c1-a1cf-42cb81eb6cb0
- Site URL: https://vsco.co
- ID: 759c0588-ea22-44c1-a1cf-42cb81eb6cb0
- Theme: light
- Industry: media
- Created: 2026-04-07T18:48:50.000Z
- Ranks: newest: 941, popular: 497, trending: 1168

> High-contrast geometric abstraction. Like engineering blueprints rendered in bold ink on a white page, punctuated by a single, sharp burst of yellow ink.

## Description

VSCO's design system creates a raw, utilitarian feel, blending high-contrast black and white with a select, vibrant yellow accent. The heavy reliance on a custom sans-serif font with tight letter-spacing for headlines establishes a direct, unadorned communication style. The overall impression is one of stark professionalism with a hint of creative energy, achieved through the deliberate scarcity of color and the bold, geometric typography.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Black | #000000 | neutral | Primary text, headline text, buttons, background for dark sections. Establishes the stark contrast. |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button text. The canvas for all content, amplifying contrast. |
| Fog Gray | #f2f2f2 | neutral | Subtle background for alternating sections, differentiating content blocks without visual noise. |
| Steel Gray | #d9d9d9 | neutral | Outline for ghost buttons, subtle borders. Adds definition without heaviness. |
| Medium Gray | #737373 | neutral | Secondary text, descriptive elements. Provides hierarchy without losing legibility. |
| Amber Glow | #f1a900 | accent | Key CTA buttons, badges, interactive accents. The single, sharp burst of color to draw attention. |
| Sunshine Yellow | #ffbc3c | accent | Alternate CTA button color, indicating a secondary but still active call-to-action. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| VSCO Gothic | Open Sans | 400, 500, 600 | 10px, 11px, 13px, 15px, 16px, 24px, 29px, 36px, 54px, 89px, 98px | 0.88, 0.93, 0.95, 1.00, 1.08, 1.10, 1.14, 1.20, 1.24, 1.25, 1.29, 1.30, 1.40, 1.50 | The primary typeface for all textual content, from body to display. Its custom nature and geometric structure, particularly the tight negative letter-spacing on display sizes, create a distinctive, authoritative, and modern feel that a system font would not achieve. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body | 15 | 1.3 |  |
| subheading | 24 | 1.25 |  |
| heading | 36 | 1.25 |  |
| heading-lg | 54 | 1.14 |  |
| display | 98 | 0.93 | -0.98 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "badges": "4px",
    "images": "4px",
    "buttons": "999px",
    "navItems": "4px"
  },
  "elementGap": "4-20px",
  "sectionGap": "100px",
  "cardPadding": "28-30px",
  "pageMaxWidth": null
}
```

## Components

### Hero CTA Button Group



### Feature Tab Bar with Product Cards



### Info Badge & Pricing Card (Dark)



### Primary CTA Button

**Role:** Call to action

Solid black background (#000000), white text (#ffffff), 999px border-radius, 2px vertical padding, 16px horizontal padding. Font is VSCO Gothic, weight 600.

### Ghost Button

**Role:** Secondary action

Transparent background, black text (#000000), 1px solid black border (#000000), 999px border-radius, 2px vertical padding, 28px horizontal padding. Font is VSCO Gothic, weight 400.

### Underlined Navigation Button

**Role:** Navigation links

Transparent background, black text (#000000), 1px solid black border-bottom (#000000), 0px border-radius, 8px vertical padding, 0px horizontal padding. Font is VSCO Gothic, weight 400.

### Amber CTA Button

**Role:** Alternate call to action

Solid amber background (#f1a900), black text (#000000), 999px border-radius, 2px vertical padding, 28px horizontal padding. Font is VSCO Gothic, weight 600.

### Info Badge (Amber)

**Role:** Labels for new features or status

Solid amber background (#f1a900), black text (#000000), 4px border-radius, 4px vertical padding, 6px horizontal padding. Font is VSCO Gothic.

### Pricing Card (Dark)

**Role:** Displays pricing tiers or feature sets

Solid black background (#000000), white text (#ffffff), 0px border-radius, 30px vertical padding, 28px horizontal padding.

### Pricing Card (Light)

**Role:** Displays pricing tiers or feature sets

Solid white background (#ffffff), black text (#000000), 0px border-radius, 30px vertical padding, 28px horizontal padding.

### Hero Headline

**Role:** Main page title

VSCO Gothic, 98px size, 0.93 line-height, -0.05em letter-spacing, pure black text (#000000).

## Do's

- Prioritize Absolute Black (#000000) and Pure White (#ffffff) for high-contrast pairs, especially for text and background combinations.
- Use VSCO Gothic with negative letter-spacing for headlines (e.g., -0.05em at large sizes) to create a distinct, modern feel.
- Apply 999px border-radius for all primary and secondary buttons, signifying interactive elements.
- Employ Amber Glow (#f1a900) as the exclusive accent color for primary calls-to-action and badges.
- Maintain a tight vertical rhythm using base units of 4px, especially for margin-bottom and padding in blocks and text.
- Utilize Fog Gray (#f2f2f2) to subtly differentiate background sections without introducing strong chromatic shifts.

## Don'ts

- Avoid using multiple accent colors; Amber Glow (#f1a900) and Sunshine Yellow (#ffbc3c) serve as the only chromatic highlights.
- Do not introduce soft shadows or gradients; the design relies on stark contrast and flat surfaces for depth.
- Omit rounded corners for cards and main content blocks; these should remain sharp (0px radius) to maintain the geometric aesthetic.
- Do not deviate from VSCO Gothic; it is integral to the brand's typographic identity.
- Avoid excessive spacing; elements are presented compactly to maintain information density.
- Do not use subtle gray for actionable elements; interactivity should be clearly indicated by Absolute Black, Pure White, or Amber Glow.

## Layout

The page model alternates between full-bleed sections and a max-width contained layout, centered on the page. The hero features a full-bleed background photograph with a prominent, centered headline and subtext over solid white. Subsequent sections often use alternating white and Fog Gray (#f2f2f2) backgrounds with consistent vertical spacing. Content is primarily arranged in two-column layouts featuring text and imagery, or three-column card grids for features. The navigation is a sticky top bar with clearly delineated links and call-to-action buttons. The overall density is compact, presenting information efficiently with minimal whitespace between elements.

## Imagery

Imagery on this site is dominated by high-quality photography, often depicting people using cameras or artistic, abstract compositions. Images are typically full-bleed in hero sections or contained within fluid, responsive layouts, sometimes with a 4px border-radius. Product screenshots are minimal, focusing on the interface itself. The role of imagery is primarily aspirational and atmospheric, showcasing the potential results of using the product, with a secondary role in explanatory content via illustrative product UI shots. Graphics are largely absent, favoring photography.

## Similar Brands

| Business | Why |
| --- | --- |
| Adobe Creative Cloud | Similar target audience (creatives), uses a clean, utilitarian aesthetic with high-contrast text and limited accent colors for professional tools. |
| Figma | Employs a stark, functional interface with strong typography and a measured use of brand accent colors against a mostly monochromatic background. |
| Frame.io | Features a direct, high-contrast visual style with a focus on product visuals and a precise typographic hierarchy for professional users. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
Text: #000000
Background: #ffffff
CTA: #f1a900
Border: #d9d9d9
Accent: #f1a900

### Example Component Prompts
1.  **Create a Hero Section**: Background photo. Centered headline 'WHERE PHOTOGRAPHERS TURN PRO' (VSCO Gothic, 98px, 0.93 lh, -0.05em ls, #000000). Below, body text 'Capture and edit photos with professional apps...' (VSCO Gothic, 15px, 1.3 lh, #000000). Two buttons below that: 'TRY VSCO FOR FREE' (black background #000000, white text #ffffff, 999px radius, 2px vertical padding, 16px horizontal padding) and 'EXPLORE PRO' (Amber Glow background #f1a900, black text #000000, 999px radius, 2px vertical padding, 28px horizontal padding).
2.  **Generate a Feature Card**: Background Pure White (#ffffff), 0px radius, 30px vertical and 28px horizontal padding. Headline 'PHOTO FILTERS' (VSCO Gothic, 24px, 1.25 lh, #000000). Below, a small image with 4px radius. At the bottom, a link 'Learn More' (VSCO Gothic, 15px, 1.3 lh, #000000) with an arrow icon.
3.  **Build a Navigation Bar**: Background Pure White (#ffffff). Links 'Products', 'Solutions', etc. (VSCO Gothic, 15px, 1.3 lh, #000000, 8px vertical padding, 0px horizontal padding, 1px solid black border-bottom). One ghost button 'LOG IN' (transparent background, #000000 text, 1px #000000 border, 999px radius, 2px vertical padding, 28px horizontal padding) and one primary CTA button 'TRY FOR FREE' (black background #000000, white text #ffffff, 999px radius, 2px vertical padding, 16px horizontal padding).
4.  **Create a Section Divider**: Background Fog Gray (#f2f2f2), minimum height 100px. Headline 'EVERYTHING A PHOTOGRAPHER NEEDS' (VSCO Gothic, 54px, 1.14 lh, #000000, -0.05em ls) centered within this section. Below the headline, a row of underlined navigation links, 'WHAT’S NEW', 'CREATE', 'CONNECT', 'WORK', all with black text, 8px vertical padding, and a 1px solid black border-bottom, using VSCO Gothic 15px, 1.3 lh.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933198489-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933198489-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/759c0588-ea22-44c1-a1cf-42cb81eb6cb0-1777568618276-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/759c0588-ea22-44c1-a1cf-42cb81eb6cb0-1777568618276-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/759c0588-ea22-44c1-a1cf-42cb81eb6cb0-1777568618276-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/759c0588-ea22-44c1-a1cf-42cb81eb6cb0-1777568618276-preview-detail-poster.jpg |
