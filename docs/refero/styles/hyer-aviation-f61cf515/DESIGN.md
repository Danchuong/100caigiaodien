# Hyer Aviation — Refero Style

- Refero URL: https://styles.refero.design/style/f61cf515-ccd5-4494-bdd1-be9fe4d7258c
- Site URL: https://www.flyhyer.com
- ID: f61cf515-ccd5-4494-bdd1-be9fe4d7258c
- Theme: light
- Industry: other
- Created: 2026-04-30T03:06:15.161Z
- Ranks: newest: 230, popular: 47, trending: 21

> monochromatic luxury, sharp contrast

## Description

Hyer Aviation employs a commanding, high-contrast aesthetic, juxtaposing crisp white surfaces with deep, almost-black elements. Bold, large-scale typography creates immediate impact, while subtle details like rounded pill shapes and a single warm accent color temper its power. The design feels grounded and luxurious, with ample whitespace and a restrained color palette that allows imagery to take center stage, communicating sophistication through assertive simplicity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Obsidian | #000d10 | neutral | Primary text, dark surface backgrounds, button backgrounds, interactive elements, nav text. Creates a dominant, authoritative presence |
| Canvas White | #ffffff | neutral | Page backgrounds, light surface backgrounds, secondary text, button text, icons. Provides a clean, expansive foundation |
| Slate Mist | #8e8e95 | neutral | Muted body text, navigation dividers, subtle borders. Used for secondary information that lives harmoniously within the high-contrast system |
| Desert Sienna | #bc7155 | accent | Accent for call-to-action buttons, prominent graphical elements. This warm, earthy tone provides the only saturated color highlight, drawing attention with understated luxury |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| HelveticaNowDisplay | system-ui | 400, 700 | 17px, 18px, 20px, 23px, 30px, 37px, 52px, 60px, 63px, 131px, 187px | 0.80, 0.91, 1.00, 1.09, 1.10, 1.20, 1.61 | All primary textual content: headlines, body, buttons, navigation. Its large scale and slightly condensed forms deliver a modern, impactful voice. |
| sans-serif | Arial | 700 | 17px | 1.00 | Used sparingly for specific bold text, likely for icons or small utility elements where a system sans-serif is a fallback. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 17 | 1.61 | 0.17 |
| subheading | 20 | 1.2 | 0.2 |
| heading-sm | 30 | 1.1 | -0.3 |
| heading | 52 | 1.09 | -0.52 |
| heading-lg | 63 | 0.91 | -0.63 |
| display | 187 | 0.8 | -3.74 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "1000px",
    "other": "45px",
    "buttons": "1000px"
  },
  "elementGap": "23px",
  "sectionGap": "68px",
  "cardPadding": "22px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button, promoting core actions.

Background: Desert Sienna (#bc7155), Text: Canvas White (#ffffff), Border: None, Border Radius: 1000px (pill shape), Padding: 15px top, 22px horizontal, 16px bottom. Font: HelveticaNowDisplay, 17px, bold (700).

### Obsidian Filled Button

**Role:** Secondary call-to-action or general action buttons.

Background: Obsidian (#000d10), Text: Canvas White (#ffffff), Border: 1px Canvas White (#ffffff) for hover/focus, Border Radius: 1000px (pill shape), Padding: 15px top, 22px horizontal, 16px bottom. Font: HelveticaNowDisplay, 17px, bold (700).

### Obsidian Ghost Button

**Role:** Alternative action buttons, appearing less prominent than filled variants.

Background: transparent, Text: Canvas White (#ffffff), Border: 1px Canvas White (#ffffff), Border Radius: 1000px (pill shape), Padding: 15px top, 22px horizontal, 16px bottom. Font: HelveticaNowDisplay, 17px, bold (700).

### Navigation Link

**Role:** Primary navigation items in the header and footer.

Text: Obsidian (#000d10) or Canvas White (#ffffff), active state may have a subtle underline. Font: HelveticaNowDisplay, 17px, 400 weight. Spacing: 13px top/bottom margin, 34px right margin.

### Feature Card

**Role:** Displays key features or offerings with associated text.

Background: Canvas White (#ffffff), Text: Obsidian (#000d10) or Slate Mist (#8e8e95). Font: HelveticaNowDisplay, varying sizes. Likely has internal padding of 22px.

## Do's

- Prioritize Canvas White (#ffffff) for primary backgrounds and Obsidian (#000d10) for primary text to maintain high contrast (19.7:1 AAA).
- Use HelveticaNowDisplay consistently across all text, emphasizing weight 700 for headings and weight 400 for body text.
- Apply a 1000px border-radius to all buttons and prominent links to achieve the signature pill shape.
- Reserve Desert Sienna (#bc7155) exclusively for primary action buttons to create a single, clear focal point.
- Ensure generous spacing: utilize 23px for element gaps and 68px between major sections.
- Employ negative letter-spacing for large headlines to condense text and enhance impact, specifically -0.02em at sizes like 187px.
- Use Slate Mist (#8e8e95) for supporting text and subtle UI elements where less visual weight is desired, such as form helper text or secondary navigation.

## Don'ts

- Avoid using multiple saturated colors; Desert Sienna (#bc7155) is the singular accent color.
- Do not introduce complex gradients or shadows, as the system relies on flat surfaces and high contrast.
- Refrain from using smaller body text sizes than 17px to maintain readability and design gravitas.
- Do not deviate from the HelveticaNowDisplay font for any brand-related text.
- Avoid tight spacing around interactive elements; maintain a minimum of 22px horizontal padding for buttons.
- Do not use square or mildly rounded corners for buttons; the pill shape (1000px radius) is critical for brand identity.
- Do not use generic gray tones for text; ensure body text aligns with Obsidian (#000d10) or Slate Mist (#8e8e95) to maintain the established hierarchy.

## Layout

The page primarily utilizes a full-bleed structure, especially for the hero section which extends across the viewport with central text and imagery. Content sections alternate between stark white full-width blocks and dark full-width blocks, creating a distinct visual rhythm. Text and imagery are often arranged in centered stacks or simple two-column layouts. The overall density is spacious, allowing elements to breathe. Navigation is a minimalist top bar with links aligned to the right, often disappearing into a hamburger menu on smaller screens, and a utility navigation in the footer.

## Imagery

The site uses a clean mix of professional product renders (specifically, a white private jet prominent against a subtly cloudy sky) and abstract, high-contrast imagery to convey luxury and precision. Photography is minimalist, focusing on the product itself with little extraneous context. Icons, where present, are likely minimal and monochromatic, adhering to the high-contrast aesthetic. Imagery plays a key role in setting the atmosphere without overwhelming the clean UI.

## Similar Brands

| Business | Why |
| --- | --- |
| NetJets | Luxury aviation brand with high-quality product imagery and emphasis on exclusivity. |
| Flexjet | Focus on private jet services, using clean layouts and impactful visuals. |
| Stripe | Strong typographic hierarchy, large headlines, and a focus on essential UI elements over decorative embellishments. |
| Apple | Product-centric visuals against clean backgrounds, high contrast text, and a strong sense of modern minimalism. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000d10
background: #ffffff
border: #8e8e95
accent: #bc7155
primary action: #bc7155 (filled action)

Example Component Prompts:
Create a hero section: full-bleed background set by an image of a private jet against a light blue sky. Overlay a large headline "Personalised Aviation" in Canvas White (#ffffff), HelveticaNowDisplay, 187px, weight 700, line height 0.8, letter-spacing -3.74px, aligned left. Below the headline, add a subtitle "More flexibility, freedom and choice!" in Canvas White (#ffffff), HelveticaNowDisplay, 23px, weight 400. In the bottom right corner, place two pill-shaped buttons with 1000px radius: 'All Solutions' (Obsidian Filled Button: #000d10 background, #ffffff text, HelveticaNowDisplay, 17px, bold, 15px top, 22px horizontal, 16px bottom padding) and 'Ownership' (Desert Sienna Filled Button: #bc7155 background, #ffffff text, HelveticaNowDisplay, 17px, bold, 15px top, 22px horizontal, 16px bottom padding).

Create a feature panel: Canvas White (#ffffff) background. Headline 'Flexible Solutions' in Obsidian (#000d10), HelveticaNowDisplay, 30px, weight 700, line height 1.1, letter-spacing -0.3px. Below, body text 'Stop depending on airlines. Fly on your own terms or join our exclusive shared flights.' in Slate Mist (#8e8e95), HelveticaNowDisplay, 17px, weight 400, line height 1.61. Separate features with a 1px Slate Mist (#8e8e95) horizontal rule that extends the width of the content.

Create a footer: Obsidian (#000d10) background, with all text in Canvas White (#ffffff). Navigation links 'On-demand', 'Private Charter', 'Aircraft Ownership' should use HelveticaNowDisplay, 17px, weight 400, with 13px top/bottom and 34px right margin between them. Include a minimal copyright text in Canvas White (#ffffff) at 17px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518358624-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518358624-thumb.jpg |
