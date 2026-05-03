# Liron Moran Interiors — Refero Style

- Refero URL: https://styles.refero.design/style/43400d73-ca89-4750-8fa6-78cd2c661943
- Site URL: https://www.lironmoran-interiors.com
- ID: 43400d73-ca89-4750-8fa6-78cd2c661943
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:37:34.113Z
- Ranks: newest: 334, popular: 1162, trending: 1177

> Gallery backdrop with monumental typography

## Description

Liron Moran Interiors employs a bold, architectural visual style, characterized by a dominant dark canvas that creates a sophisticated, gallery-like setting for minimalist UI elements. Overlaid huge serif typography with transparent image cutouts defines an immersive and dramatic presentation. The sparse use of neutral colors and ample whitespace around oversized elements contributes to a feeling of premium, considered design where content is paramount and UI recedes until interaction.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Greyscale Canvas | #41443e | neutral | Page background, primary content surface. This dark, desaturated gray provides a deep, sophisticated stage for the content |
| Overlaid Paper | #f2f0ed | neutral | Background for secondary content blocks and occasional text elements, providing a subtle contrast against the primary canvas |
| Text and Accent Light | #eeeeee | neutral | Primary text color for headlines and body copy, borders for ghost buttons, navigation items when active, and icon fills |
| Midnight Ink | #000000 | neutral | Used for specific text elements, icon borders, and occasionally as a very dark background to create maximum contrast. Offers a grounding visual weight |
| Deepest Black | #050505 | neutral | Exclusive background for certain interactive elements, suggesting a distinct, albeit minimal, state differentiation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Lausanne-300 | Inter | 400 | 12px, 13px, 14px, 20px, 23px, 30px, 75px, 93px, 185px | 0.80, 1.00 | Extensive use across all text roles from body to secondary headings. Its versatility and minimalist structure provide a contemporary counterpoint to the display serif. |
| cardinalfruit-regular | Playfair Display | 400 | 260px | 1.00 | Primary display font for colossal, impactful headlines. Its serif elegance is central to the brand's sophisticated aesthetic. |
| Metropolis | Open Sans | 500 | 14px | 1.14 | Used sparingly for subtle text accents and helper text, its slightly wider tracking lends a distinct modern touch. |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |
| Times |  | 400 | 16px | 1.2 | Times — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 0.8 |  |
| body | 14 | 0.8 | -0.004 |
| subheading | 20 | 0.8 |  |
| heading-sm | 23 | 0.8 |  |
| heading | 30 | 0.8 |  |
| heading-lg | 75 | 0.8 |  |
| display-xl | 93 | 0.8 |  |
| display-xxl | 185 | 0.8 |  |
| display-max | 260 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "50%",
    "navigation": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "89px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Ghost Circular Button

**Role:** Interactive element (e.g., menu toggle, accessibility toggle)

Transparent background button with a 50% border radius creating a circular shape. Border and text color are #eeeeee. Padding is minimal (0px padding), creating a compact, unobtrusive control.

### Dark Circular Button

**Role:** Interactive element (e.g., close button on overlay)

Solid background button with a 50% border radius creating a circular shape. Background is #050505, text color is #000000. Padding is minimal (0px padding), used for high-contrast, functionally distinct controls.

### Ghost Rectangular Button

**Role:** Text link or secondary action

Transparent background button with 0px border radius, forming a sharp rectangular shape. Border and text color are #eeeeee. Minimal (0px) padding, used for 'View all projects' links.

### Main Navigation Link

**Role:** Top-level navigation items

Text link using Lausanne-300 font at 14px, #eeeeee. These links are part of the header navigation, with generous right padding (130px) for spatial separation.

## Do's

- Use Greyscale Canvas (#41443e) as the dominant background color for most page sections.
- Typography should prioritize cardinalfruit-regular for large, impactful headlines, leveraging its unique serif character.
- Implement Ghost Circular Buttons (#eeeeee border/text) for subtle, interactive controls like menu toggles.
- Maintain a spacious density, with section gaps of 89px to ensure breathing room between content blocks.
- Ensure all text, borders, and icons on Greyscale Canvas backgrounds use Text and Accent Light (#eeeeee) for visibility.
- For oversized display text, use Lausanne-300 at 185px with a line height of 0.8.
- Apply 39px horizontal padding for contained content elements, complementing the spacious layout.

## Don'ts

- Avoid using highly saturated colors; maintain a largely achromatic palette apart from imagery.
- Do not introduce sharp, angular strokes or imagery against the soft, serif typography without a clear design rationale.
- Do not clutter the layout with dense information blocks; prioritize spaciousness and dramatic visual pauses.
- Avoid generic sans-serif fonts for primary headlines; the distinct serif is key to brand identity.
- Do not deviate from circular or sharp rectangular shapes for buttons; avoid rounded corner treatments.
- Do not use box shadows for elevation; rely on color contrast and spatial separation to differentiate elements.
- Do not use dark text (Midnight Ink) on Greyscale Canvas (#41443e); it lacks sufficient contrast.

## Similar Brands

| Business | Why |
| --- | --- |
| Norm Architects | Monochromatic palette, emphasis on sophisticated typography, and minimalistic UIs with strong architectural photography. |
| B&B Italia | High-end product showcase, with dramatic visuals and a sparse, premium feel in their digital presence. |
| Artemide | Focus on singular, impactful product photography within a refined, often dark-themed, visual environment. |
| Dezeen | Sophisticated use of typography and ample negative space to frame content, often with a stark, modern aesthetic. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #eeeeee
background: #41443e
border: #eeeeee
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a hero section with a Greyscale Canvas background (#41443e). Headline 'ICONIC' in cardinalfruit-regular, 260px, #eeeeee, line height 1.0. The word 'INTERIORS' is a separate headline, same style. Center a product image as a cutout behind the headlines. Add a 'SCROLL' label using Lausanne-300, 14px, #eeeeee, aligned to the left of the main content area.

Create a ghost circular button: background transparent, border 1px solid #eeeeee, border-radius 50%, text 'MENU' in Lausanne-300, 14px, #eeeeee, 0px padding. Place it top right.

Create a 'View All Projects' link: background transparent, border 1px solid #eeeeee, border-radius 0px, text 'VIEW ALL PROJECTS' in Lausanne-300, 14px, #eeeeee, 0px padding. Align it bottom center.

Create a basic body text paragraph: Use Lausanne-300, 14px, #eeeeee, line height 0.8. Ensure left and right padding of 39px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516631449-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516631449-thumb.jpg |
