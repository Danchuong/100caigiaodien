# ProtoPie — Refero Style

- Refero URL: https://styles.refero.design/style/031302e5-3269-4735-ab56-d4c7d02edc01
- Site URL: https://protopie.io
- ID: 031302e5-3269-4735-ab56-d4c7d02edc01
- Theme: light
- Industry: design
- Created: 2026-02-04T17:28:57.000Z
- Ranks: newest: 1235, popular: 610, trending: 1106

> Tech console, soft glow.

## Description

ProtoPie's design system creates a feeling of approachable high-tech proficiency. Its light theme and ample whitespace are punctuated by vibrant violet accents that guide interaction without overwhelming, like glowing controls on a clean white console. The judicious use of rounded corners—from subtle 4px button radii to emphatic 9999px pills—softens the technical edge, making complex prototyping feel open and inviting. Custom display fonts contribute to a distinctive, playful yet authoritative brand voice.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #181818 | neutral | Primary text for headings and body, providing high contrast on light backgrounds. |
| Stone Gray | #555555 | neutral | Secondary text and subtle details, creating a softer visual hierarchy. |
| Pale Gray | #999999 | neutral | Tertiary text, descriptive labels, and subtle UI elements. |
| Ghost White | #ffffff | neutral | Page backgrounds, card surfaces, and primary button text. |
| Crystal Frost | #e9e9e9 | neutral | Subtle background for UI elements, separating sections without sharp contrast. |
| Iris Bloom | #8169ff | brand | Primary interactive elements like buttons and links, defining key actions and brand presence. |
| Violet Signal | #6d4ff0 | brand | Alternative interactive elements, hover states, and brand highlights. |
| Lavender Haze | #c9bfff | accent | Soft button backgrounds and subtle decorative elements, hinting at interaction. |
| Aqua Tint | #3eb2b2 | accent | Decorative elements and occasional iconography. |
| Violet Fade | #ab9eff | accent | Background gradients and soft visual accents. |
| Aqua Gradient | #81dbdb | accent | Subtle background effect creating depth and a modern feel. |
| Lavender Swirl | #e3deff | accent | Decorative background gradient, adding a soft, ethereal quality to sections. |
| Violet Mist | #c9bfff | accent | Background gradient for sections, providing a gentle color transition. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gilroy | Montserrat | 400, 700 | 16px, 18px, 20px, 22px, 28px, 48px, 62px | 1.29, 1.30, 1.33, 1.43, 1.45, 1.50, 1.56, 1.60 | Dominant brand typeface used across headings, navigation, and key brand messages. The varying weights and generous line heights contribute to a modern, airy feel, while the bold weights at display sizes carry authority. |
| Inter | Inter | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 24px | 1.30, 1.40, 1.43, 1.50, 1.56, 1.67 | Used for body text, links, and detailed UI elements, ensuring legibility and content-heavy sections. Its clean, functional design supports the technical nature of the product. |
| Palmer Lake Print | Rubik | 400 | 32px | 0.80 | A distinctive, decorative display font used sparingly for unique headings or stylistic elements. Its very tight line height and decorative nature add a unique flair, distinguishing specific brand messaging. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.56 |  |
| heading | 22 | 1.45 |  |
| heading-lg | 28 | 1.43 |  |
| display-sm | 32 | 0.8 |  |
| display | 48 | 1.33 |  |
| display-lg | 62 | 1.29 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "links": "12px",
    "other": "8px",
    "pills": "9999px",
    "buttons": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action.

Background: Iris Bloom (#8169ff), Text: Ghost White (#ffffff), Border: Ghost White (#ffffff), Radius: 4px, Padding: 11px vertical, 16px horizontal. Uses Gilroy 700.

### Secondary Soft Button

**Role:** Alternative call-to-action or secondary action.

Background: Lavender Haze (#c9bfff), Text: Midnight Ink (#000000), Border: none, Radius: 8px, Padding: 0px. Uses Gilroy 400.

### Ghost Text Button

**Role:** Navigation or less prominent actions.

Background: transparent, Text: Midnight Ink (#000000), Border: none, Radius: 0px, Padding: 0px. Uses Gilroy 400.

### Pill Button

**Role:** Tags, categories, or filtering elements.

Background: Ghost White (#ffffff), Text: Midnight Ink (#000000), Border: none, Radius: 9999px, Padding: 0px (likely content-driven). Uses Gilroy 400.

### Header Navigation Link

**Role:** Main navigation items.

Text: Midnight Ink (#181818), no background, no border. Uses Gilroy 400 at 16px.

### Input Field

**Role:** User data entry.

Background: transparent, Text: Midnight Ink (#181818), Border: Midnight Ink (#181818), Radius: 0px, Padding: 16px vertical, 8px horizontal. Uses Inter 400.

### Elevated Card

**Role:** Content container with visual separation.

Background: Ghost White (#ffffff), Border Radius: 16px. Shadow: `rgba(0, 0, 0, 0.12) 0px 3px 12px 0px, rgba(0, 0, 0, 0.3) 0px 0px 2px 0px`.

## Do's

- Use Iris Bloom (#8169ff) for primary interactive buttons and links to consistently highlight calls to action.
- Apply Gilroy 700 for all headings to maintain brand's bold and clear voice, particularly at display sizes up to 62px.
- Implement 4px border-radius on primary action buttons for a subtle softening, contrasting with the overall sharpness.
- Incorporate `radial-gradient(47.72% 108.66% at -12.1% 21.18%, rgba(129, 219, 219, 0.25) 24.27%, rgba(160, 232, 232, 0) 100%)` for background accents to add depth without strong hard lines.
- Maintain a clear visual hierarchy using Midnight Ink (#181818) for primary text, Stone Gray (#555555) for secondary, and Pale Gray (#999999) for tertiary information.
- Use 9999px radius for all pill-shaped elements to differentiate them clearly as tags or small categorizations.
- Employ the `rgba(0, 0, 0, 0.12) 0px 3px 12px 0px, rgba(0, 0, 0, 0.3) 0px 0px 2px 0px` shadow for cards or elevated content to give subtle lift.

## Don'ts

- Avoid using highly saturated colors outside of the brand's defined violet and aqua accents to maintain a clean, light aesthetic.
- Do not introduce sharp corners on card-like elements; maintain a minimum of 8px radius to keep the system's approachable feel.
- Refrain from heavy, dark backgrounds on main content areas; the Ghost White (#ffffff) and Crystal Frost (#e9e9e9) provide necessary breathing room.
- Do not use generic system fonts for prominent headings; always use Gilroy or designated substitutes to preserve brand identity.
- Avoid excessive use of Palmer Lake Print; reserve it for specific, high-impact decorative headings only, due to its distinct character.
- Do not clutter layouts; leverage the comfortable density and significant whitespace to emphasize key content and interactions.
- Do not deviate from the established padding and spacing units; consistent use of 8px, 12px, 16px is crucial for a cohesive system.

## Layout

The page maintains a centered, max-width content area (around 1200px inferred) within a full-bleed background. The hero section often features a centered headline over a subtle gradient background, setting an open tone. Section rhythm relies on generous vertical spacing and occasional background color shifts, primarily using soft white and light gradient bands to delineate content blocks. Content arrangement frequently uses two-column layouts, often text on one side and product visuals or user testimonials on the other. Card grids organize features or customer logos in a 3-column structure. Navigation is a persistent top bar, sticky on scroll, with a clear 'Get Started' CTA.

## Imagery

The site uses a mix of tightly cropped product screenshots and playful, sometimes abstract, illustrations. Product shots are typically clean, isolated, and demonstrate UI interactions. Illustrations are dimensional and often incorporate brand colors (violet/aqua) or soft gradients, lending a friendly but sophisticated feel. Icons are primarily outlined or filled monochrome, reflecting the precision of a design tool. The visual density is balanced; images are present but not overwhelming, serving to explain and showcase the product's capabilities rather than just decorate.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Card | rgba(0, 0, 0, 0.12) 0px 3px 12px 0px, rgba(0, 0, 0, 0.3) 0px 0px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Shares a clean, light-themed UI with strong color accents that highlight interactive elements and a focus on product visuals. |
| Sketch | Utilizes a balanced approach of whitespace and clear typography for a professional, tool-oriented aesthetic while maintaining approachability. |
| Webflow | Exhibits a similar use of vibrant accent colors against a predominantly light background to guide users through complex functionality and emphasize calls to action. |
| Linear | Adopts fine-grained control over typography and spacing, paired with a focus on functional, modern design, although Linear is darker-themed. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text Primary:** `#181818` (Midnight Ink)
- **Background Primary:** `#ffffff` (Ghost White)
- **CTA Primary:** `#8169ff` (Iris Bloom)
- **Border Generic:** `rgba(0, 0, 0, 0.12)` (Shadow)
- **Accent Soft:** `#c9bfff` (Lavender Haze)

### Example Component Prompts
1. **Create a Primary Filled Button:** Background `#8169ff`, text `#ffffff`, border `#ffffff`, radius `4px`, padding `11px 16px`. Text 'Get Started' in Gilroy 700, 16px.
2. **Generate an Elevated Card:** Background `#ffffff`, border-radius `16px`, box-shadow `rgba(0, 0, 0, 0.12) 0px 3px 12px 0px, rgba(0, 0, 0, 0.3) 0px 0px 2px 0px`. Inner padding `16px`.
3. **Design a Heading 1:** Text `#181818`, Gilroy 700, size `48px`, line-height `1.33`. Content: '#1 advanced prototyping tool'.
4. **Produce a Pill Button:** Background `#ffffff`, text `#000000`, border-radius `9999px`, padding `6px 12px` (inferred). Text 'Automotive' in Gilroy 400, 16px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923888067-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923888067-thumb.jpg |
